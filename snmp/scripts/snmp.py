#!/usr/bin/python3
import sys
import os
import time
from datetime import datetime


ip = sys.argv[1]
ifInOctets_OID = "1.3.6.1.2.1.2.2.1.10"
ifOutOctets_OID = " 1.3.6.1.2.1.2.2.1.16"
ifspeed_OID = " 1.3.6.1.2.1.2.2.1.5.1"
command= "snmpwalk -v2c -c ornekparola "+ip+" "

def stream(command):
    stream = os.popen(command)
    value = stream.read()
    value = value.split()
    value = value[7]
    return int(value)

def ifOutOctets(command):
    command = command+ifOutOctets_OID
    return stream(command)

def ifInOctets(command):
    command = command+ifInOctets_OID
    return stream(command)

def ifspeed(command):
    command = command+ifInOctets_OID
    return stream(command)

def DeltaIfInOctets(command):
    Octets0 = ifInOctets(command)
    time.sleep(3)
    Octets1 = ifInOctets(command)
    if Octets0-Octets1 < 0:
        return Octets1-Octets0
    else:
        return Octets0-Octets1

def DeltaIfOutOctets(command):
    Octets0 = ifOutOctets(command)
    time.sleep(3)
    Octets1 = ifOutOctets(command)
    if Octets0-Octets1 < 0:
        return Octets1-Octets0
    else:
        return Octets0-Octets1

def saniye():
    n = datetime.now()
    n=int(n.strftime("%S"))
    return n

def halfduplex(command):
    half=((DeltaIfInOctets(command) + DeltaIfOutOctets(command)) * 8 * 100) / (saniye() * ifspeed(command))
    return half

def fullduplex(command):
    full=(max(DeltaIfInOctets(command),DeltaIfOutOctets(command)) * 8 * 100) / (saniye() * ifspeed(command))
    return full

def gelen(command):
    gelenT = (DeltaIfInOctets(command) * 8 * 100) / (saniye() * ifspeed(command))
    return gelenT

def giden(command):
    gidenT = (DeltaIfOutOctets(command) * 8 * 100) / (saniye() * ifspeed(command))
    return gidenT


full = str(fullduplex(command))
half = str(halfduplex(command))
gelenT = str(gelen(command))
gidenT = str(giden(command))

print("half-duplex: "+half)
print("full-duplex: "+full)
print("Gelen trafik: "+gelenT)
print("Giden trafik: "+gidenT)
