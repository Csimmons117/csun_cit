## CHAPTER 1
### CORE NETWORK CONCEPTS AND TERMINOLOGY


#### Objectives
- Discuss how the Internet is changing and the security challenges these changes are creating.
- Explain basic concepts and terminology for the hosts (devices) that connect to the Internet.
- Explain basic concepts and terminology for the Internet itself.
- Explain basic concepts and terminology for single networks and their role on the Internet.
- Explain the distinctions between Internet routers and personal access routers; explain the differences between personal access routers and wireless access points.

#### What is the Internet of Things (IoT)?
1. “In the future, many everyday objects will be connected to the internet. This big network of objects will mean many tasks and information exchanges can be automated”
1. “It’s the idea that any physical object can connect to the internet and communicate with other objects to relay information to people”
1. Examples
	- Smart home
	- Wareable tech
	- Smart cities
	- Connected cars
	- Smart Factory
	- Smart Farm
	- etc.

#### Why is Smart Technology Vulnerable to Privacy and Security?
1. Volume: Huge amount of data
2. Content: Existing data + consumers’ activities + real-time
3. Device: Lack of security applications in both HW/SW
4. Network: More complex and more difficult to protect data from hackers
5. Communication: Things-to-people and things-to-things
6. Storage: Usually stored in clouds
7. Control: Vendors manage data, not consumers

#### About the Internet

1. Components of the Internet
- Hosts: devices connected to the Internet.
- Example: a laptop (a mobile phone) is a host when it connects to the Internet.

2. Internet Service Providers (ISPs)
- The National Science Foundation (NSF) supplied the Internet’s transmission backbone.
- In 1995, the NSF pulled out, and commercial ISPs took over the backbone of the Internet.
- Now, Internet transmission is handled by commercial Internet service providers (ISPs).
	- Must have an I S P to use the Internet
	- Pay the I S P money
	- I S P s deliver packets across one another
	- **Nobody owns the Internet; the I S P s do, collectively**

3. Nobody Controls the Internet
- The Internet Engineering Task Force (IETF) sets standards (voluntary)
- Internet addresses to prevent duplication (Centralized)
- Regulation within countries (you cannot use YouTube in China)
- No international regulation.


4. Security
- The Internet’s promise is Anything, Anytime, Anywhere.
- Internet works for attackers as well as legitimate users.
- Internet security demands a lot of knowledge and time (Most network professionals spend an average of 10 hours a week on security)

#### Outside the Internet

1. Outside the internet
- The internet is shown as a cloud to emphasize that we do not look inside it at this point. It "Simply Works."
- The goal is to deliver appplication messages between networked applications on hosts.
- Browser-webserver Application Message Is Delivered in an IP Packet.

2. Client Hosts
- Clinet Hosts, which receive services from server hosts.
- Hosts are usually clinets, which receive services Or servers, which suppply services to client.

3. Rack Server Host
- Servers fit into 19-inch-wide equipment racks.
- Server farms have hundreds or thousands of equipment racks.

4. Client/Server Application: Webservice
- Server hosts provide services to client hosts

```markdown
(Clinet host HTTP Request Message ----->[Hypertext Transfer Protocol])
																	   
(Server Program **Webserver** HTTP response Message <-------[The Requested File ])
```
5. Various Applications and Protocols
- Not Always Browsers and Webservers
```markdown
(Clinet program(Client Host) (Excel) ---------> [ODBC query message])

(Server Program (Server Host)  <--------------[ODBC REsponse message (Table)])
```
- The client is not always a browser!
- The server is not always a webserver!
- The communication standard is not always HTTP!
- Don't confuse specific examples with general concepts
	- DBMS (Database management system)
	- ODBC (Open database connectivity protocol)
#### Inside the Internet

1. Data link
- A data link is the transmission path of an IP packet between two routers or a host to a router.

2. Internet Process: Data Link
- Hop-by-Hop (Host-Router or Router-Router)
- Packet organization and forwarding
3. Route
- The route is the packet's entire path between the source host and the destination host.

4. Transport Process: Route
- End-to-End (Host-to-Host)
- Error correction, packet sequencing, and congestion control with TCP

5. Routing (Router Forwarding)
- A router's process for forwarding packets is called routing.
- A router's forwarding decision is called a routing decision.

6. Router and Routing
- When a host transmits a packet, a router receives the arriving packet and forwards it to another router.
- A router must send it to a router closer (or low-cost, depending on the
quality agreement) to the destination host.
- Routers use a packet's IP destination addresses to deliver the packet
to its destination.
- A router's process for forwarding packets is called **routing**.
- A router's forwarding decision is called a **routing decision**.

7. Point-to-Point Single Network
- A single network is a network that uses a single set of standards for all devices.
- If one host is on one single network and another is on a single network of a different type, they cannot communicate.
- The point-to-point network is the direct physical connection defined by a physical standard.




