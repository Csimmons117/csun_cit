### Setup the Cisco switch 

Setup the Cisco switch with a host-name, Configure an administration password, Configure a password for Console access, Assign IP address to the switch for management, Assign default gateway to the switch and setup DHCP.

Submit your confirmation, one per group (include group members name in your submission).

https://www.networkstraining.com/basic-cisco-switch-configuration/Links to an external site.

**Any group that adds members that did not participate in person on the labs will receive a 0 as a group for Academic Dishonesty. Current Photos of Group members are required. One submission per group. Weekly pictures required with names listed in order.**
https://www.youtube.com/watch?v=7dXBN8a-X2U

### Cisco switch config file
#### Setting up the password
```
switch>
switch>enable
switch#
switch#conf t
switch(config)#
switch(config)#hostname test-switch
test-switch(config)#
test-switch(config)#enable password id10t
test-switch(config)#
test-switch(config)#exit
test-switch#exit
```
#### Create a vlan
```
test-switch>
test-switch>enable
password:
test-switch#
test-switch#
test-switch# conf t
test-switch(config)# vlan 10
test-switch(config-vlan)#name IT
test-switch(config-vlan)#exit
```
  

