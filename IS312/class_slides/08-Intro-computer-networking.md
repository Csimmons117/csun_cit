## Introduction to Computer Networking 

### Learning Objectives: 
1. Distinguish between the client-server and peer-to-peer models to control access to a computer network.
1. Identify types, applications, and protocols of computer networking.
1. Describe computer networking hardware devices and physical topologies.
1. Describe the seven layers of the O S I (Open Systems Interconnection) model.

### Computer Network Models

1. Topology: The way in which constituent parts are interrelated or arranged.
1. Computer NW physical topology: Describes how computers, devices, and cables fit together to form a computer network.
1. Computer NW Logical topology: Applies to software and describes how to access to the network controlled by software and protocols.
1. Network Operating Systems (NOS): Controls access to the entire computer network.

### Peer-to-Peer Network Model
1. Peer-to-peer (P 2 P) network model: Each computer on the network is responsible for controlling access to its resources.
    - No centralized control.
1. Computers, called nodes or hosts, form a group of computers on the network.
    - May or may not capable of sharing resources.
    - May or may not be capable of preventing access to resources.

### Client-Server Network Model
1. Computing resources are managed by network operating system (N O S) via a centralized directory database: A server computer.
1. Windows domain: A group of computers that a Windows Server can control, A.K.A., clients.
1. Active Directory (A D): The centralized directory database that contains user account information and security for the group of client computers.
1. A user can sign on to the network from any computer on the network and gain access to computing resources.
    > This is managed by Active Directory Domain Services (A DD S).

1. Client: A computer making a request for data/services from another.
1. Clients don’t share resources directly with each other.
    - Access is controlled by entries in the centralized domain database.
    - Client computers access resources on another computer by servers that control the domain database

1. The NOS is responsible for the following activities:
    - Manages client data, resources, and services.
    - Ensures authorized user access.
    - Controls user file access.
    - Restricts user network access.
    - Dictates computer communication rules.
    - Supplies applications to clients.
    > Server examples: Windows Server 2016……
1. Servers that have N O S installed require:
    - More memory, processing, and storage capacities.
    - Equipped with special hardware.
1. Advantages:
    - User credential assigned from one place.
    - Multiple shared resource access. 
    - Central problem monitoring, diagnostics, and correction capabilities.
    - Centrally controlled.
    - More scalable.

### Client-Server Applications

1. Network services: Computing resources and services a network makes available to its users.
    - Includes applications, data, and computing services provided by these applications.
1. In client-server applications:
    - A client computer requests data or a service from a server computer.
1. Protocols: Computing methods and rules for communication between networked devices.
1. Two primary protocols:
    - T C P (Transmission Control Protocol).
    - IP (Internet Protocol).
1. The T C P/IP suite is used by NO S for communication on a network.

1. Communications between clients and web servers follow Transmission Control Protocol/Internet Protocol (TCP/IP) and Hypertext Transfer Protocol (HTTP) .
1. All Internet traffics follow the rules of TCP/IP and HTTP.

### Network Hardware
1. Local area network (LAN): Usually configured in a small space: For example, an office or building.
1. Switch—Receives incoming data from one of its ports and redirects it to another port or multiple ports:
1. Star topology—All devices connect to one central device (usually a switch).
1. Network interface card (N I C): A network port used to attach a device to a network
1. A LAN can have several switches.
1. Backbone: A central conduit that connects the segments (pieces) of a network:
- Might use higher transmission speeds and different cabling than network cables connecting computers.
1. Three switches daisy-chained together in a single line is said to use a bus topology.
- However, each switch is connected to computers via a star topology, making it a star-bus topology.
- A topology that combines topologies is known as a hybrid topology.

1. Router: A device that manages traffic between two or more networks: 
- Can help find the best path for traffic to get from one network to another.
1. Routers can be used in small home networks to connect the home LAN to the Internet:
1. Industrial-grade routers can have several network ports, one for each network it connects.
1. Difference between router and switch:
- Router is like a gateway between networks and belongs to two or more local networks.
- Switch belongs only to its local network.

### PANs, MANs, WANs, and the Internet
1. Metropolitan area network (MAN): A group of connected LANs in the same geographical area.
1. WAN (wide area network): A group of LANs that spread over a wide geographical area
The Internet is the largest and most varied WAN.
1. PAN (personal area network) - Smallest network: A network of personal devices such as your smartphone and computer at home.

### 7-Layer O S I (Open Systems Interconnection) Model
1. Physical layer 
1. Data link layer 
1. Network layer
1. Transport layer
1. Session layer
1. Presentation layer
1. Application layer

- A 7-layer OSI model to conceptually categorize layers of computer communication.
- The layers are numbered in order, starting with Layer 1, Physical Layer, at the bottom.
    - 7 Layers: Physical, Data Link, Network, Transport, Session, Presentation, Application:
        - Please Do Not Throw Sausage Pizza Away.
        - Or, All People Seem To Need Data Processing.
    - UDP: User Datagram Protocol.  
    - FTP: File Transfer Protocol. 
    - And more…….

### Layer 7: Application Layer

1. Application Layer: Interface between applications.
1. Application layer protocols:
    - Provide services to a user, such as a browser and Web server (e.g., HTTP).
    - Utility programs that provide services to the system.
1. Payload—Data passed between applications or utility programs.

### Layer 6: Presentation Layer
1. Presentation layer: Reformatting, compressing, and encrypting data so that the end of the receiving application can read.
1. For example:
    - An email message can be encrypted by the email client and/or OS.

### Layer 5: Session Layer
1. Session layer: Determine how data between applications is synchronized and recovered. 
1. The Application, Presentation, and Session layers are intertwined.

### Layer 4: Transport Layer
1. Transport layer: Transporting payloads from one application to another.
1. Two main Transport layer protocols: 
    - T C P (Transmission Control Protocol): Makes a connection with the end host; checks whether data is received.
    - U D P (User Datagram Protocol): Checks whether data is received.
1. Protocols add control information (a header) at the beginning of the payload.
1. Encapsulation: Adding a header to the data from the layer above.
1. If message is too large, T C P divides large message into smaller ones (also known as segments).

### Layer 3: Network Layer

1. Network layer: Moving messages from one node (A.K.A., host, it is a communicating device) to another until they reach the destination node.
1. IP adds its own Network layer header.
1. IP address: Each node has it to uniquely identify each node.
1. IP relies on routing protocols to find the best route for a packet to reach the destination.
1. Network layer protocol divides large packets into smaller packets

### Layer 2 - Data Link Layer & Layer 1 - Physical Layer

1. Data Link and Physical Layer (Layers 2 and 1): Interfacing with physical hardware on the local network.
1. Networking hardware determine the Link Layer protocol.
- e.g., Ethernet and Wi-Fi.
1. MAC (Media Access Control) address: Hardware address of N I Cs.
- Also know as, physical address, hardware address, Data Link layer address.
1. Physical layer: Sending data via wired or wireless transmission.

## Summary
1. Distinguish between the client-server and peer-to-peer models to control access to a computer network.
1. Identify types of applications and protocols of a computer network.
1. Describe networking hardware devices and the most common physical topologies.
1. Describe the seven layers of the O S I model.

















