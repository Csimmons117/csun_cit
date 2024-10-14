## Virtualization & Cloud Computing

### Learning Objectives:
1. Describe virtualization technologies: How virtual machines are connected with a network; how networking devices can be virtualized.
1. Describe cloud computing categories and business models.
1. Discuss concerns about cloud connectivity and security.
1. Describe secure network connection using encryption protocols.
1. Configure remote access connection between hardware devices.

### Virtual……What does it mean?
1. Being on or simulated on a computer.
1. Occurring or existing primarily online.
1. Being such in effect though not formally recognized or admitted

### Virtualization
1. A virtual version of something rather than the actual, or physical, version.
	- Host: Physical computer “hosting” a virtual machine (VM).
	- Guest: A virtual machine.
1. Hypervisor:
	- Creates and manages VMs.
	- Manages resource allocation and sharing between the host and guest VMs. 
1. A V M’s software and hardware characteristics are assigned when it is created in the hypervisor.
1. The V M can be customized with:
	- A guest O S.
	- Amount of memory.
	- Hard disk size.
	- Processor type.
	- And more……
### Pros and Cons of Virtualization
1. Advantages/Pros of Virtualization:
	- Efficient use of resources.
	- Cost and energy savings.
	- Fault and threat isolation.
	- Simple backups, recovery, and replication.
1. Disadvantages/Cons:
	- Compromised performance.
	- Increased complexity.
	- Increased licensing costs.
	- Single point of failure.
### Cloud Computing: Application of Internet-based Virtualization 
1. Internet is frequently pictured as a cloud.
1. Cloud computing:
	- Data storage, applications, and computing services provided to clients over the Internet (cloud).
1. Cloud computing:
	- On-demand service.
	- Support for multiple platforms.
	- Resource pooling and consolidation
	- Metered service: iCloud, Google doc, etc. 
	- Elastic/Scalable services and storage:
	- Storage capacity scaled up or down.

### Cloud Computing: An Application of Internet-based Virtualization 
1. Can provide virtual desktops.
1. Developers load any kind of software on servers and test it from afar.
1. Use virtualization software to supply multiple platforms for users to use.

### Cloud Computing Categories
1. Cloud computing models categorized by types of services:
	- Traditionally, all hardware, software, and everything is located and managed at the organization’s location.
	- IaaS (Infrastructure as a Service):
		- Hardware services and network infrastructure devices are provided virtually. 
		- Including user interfaces such as hosted virtual desktops.
1. PaaS (Platform as a Service):
	- OS, runtime libraries, or modules the OS provides to applications, and the hardware on which the O S runs.
1. SaaS (Software/Applications as a Service).

### Cloud Computing Categories
1. Cloud computing models categorized by types of services provided:
- I a a S (Infrastructure as a Service):
	- Hardware services and network infrastructure devices are provided virtually. 
	- Including user interfaces such as hosted virtual desktops.
- P a a S (Platform as a Service):
	- O S, runtime libraries, or modules the OS provides to applications, and the hardware on which the O S runs.
- S a a S (Software/Applications as a Service)
1. X a a S (Anything as a Service or Everything as a Service):
	- A category of services related to cloud computing and remote access. 
	- Vendors offer all kinds of services in the Cloud. 
	- Recall the Internet of Things/Everything.

### Cloud Deployment Models
1. Cloud services are delivered in a variety of deployment models.
1. Public cloud: Service provided over public transmission lines: Salesforce.
1. Private cloud: Services established on an organization’s own servers in its own data center.
1. Community cloud: Service shared between multiple organizations.
1. Hybrid cloud: Combination of other service models into a single deployment.

### Cloud Connectivity and SECURITY & PRIVACY
1. Potential risks and limitations: Data security, privacy, backup, and organizational issues.
	- Has to depend on I S P’s uptime.
	- I S P-imposed bandwidth limitations.
	- Cloud provider’s backup and security systems.
	- Unauthorized access to data by cloud provider employees or illegitimate users
	- Breaches of confidentiality: Data privacy and trade secrecy. 
	- Data security regulations.
	- Questions over data ownership of intellectual property in the cloud.
	- Questions over data maintenance.
	- Risks to the network, proprietary data, or customer information caused by B Y O C (bring your own cloud) services on user’s personal devices.
	- educed consumer confidence.
	- Fines, lawsuits, and possibly criminal charges when cloud breaches occur.
1. Reducing risks of cloud computing:
	- Use encryption.
	- Carefully choose network methods to cloud resources:
		- Internet.
		- Remote access connections.
		- Leased line.
		- Dedicated connection.

### Encryption Protocols
1. Encryption: The use of mathematical coding, called a cipher, to scramble data into a format that can be read only by the receiver who needs to decrypt the cipher.
1. Primarily evaluated by 3 benchmarks (CIA): Standard security model.
	- Confidentiality.
	- Integrity.
	- Availability.

### Key Encryption 
1. Configured into the original data bits.
1. Generates unique data block called ciphertext.
1. Created with specific algorithms.
1. 2 categories:
	- Private key encryption.
	- Public key encryption.
1. Private key encryption:
	- Data encrypted and decrypted using a single key.
	- Known by both sender and receiver.
	- Symmetric encryption: Same key used during both encryption and decryption.
1. Public key encryption: Data encrypted with 2 keys:
	- Private key: User knows
	- Public key: Anyone can request.
1. Key pair: Combination of public and private keys.
1. Asymmetric encryption: Requires two different keys to add more layers of security.
1. Digital certificate: Holds identification information and users’ public key.
1. Certificate authority: Issues and maintains digital certificates.
1. Public key Infrastructure: Use of certificate authorities to associate public keys with certain users.

### Key Encryption: A Real Business Example 
1. Passport and JWT token
	 - "Bearer NTNv7j0TuYARvmNMmWXo6fKvM4o6nv/aUi9ryX38ZH+L1bkrnD1ObOQ8JAUmHCBq7Iy7otZcyAagBLHVKvvYaIpmMuxmARQ97jUVG16Jkpkp1wXOPsrF9zwew6TpczyHkHgX5EuLg2MeBuiT/qJACs1J0apruOOJCg/gOtkjB4c=NTNv7j0TuYARvmNMmWXo6fKvM4o6nv/aUi9ryX38ZH+L1bkrnD1ObOQ8JAUmHCBq7Iy7otZcyAagBLHVKvvYaIpmMuxmARQ97jUVG16Jkpkp1wXOPsrF9zwew6TpczyHkHgX5EuLg2MeBuiT/qJACs1J0apruOOJCg/gOtkjB4c="

	- Name: ALEX Last Name: JONES
	- Employee ID (OID):1ae43fu899kl
	- Date Hired: 08/02/2008
	- Roles: ADMIN
	- Last Logged in: 10/23/2023 at 10:30AM

### Remote Access
1. Remote Access:
	- Allows a client to connect with and log on to a server, LAN, or WAN at a different geographical location.
	- Requires a remote access server.
1. 2 Types of remote access servers:
	- Dedicated devices.
	- Software running on a server.
1. Types of remote access:
	- Point-to-point over a dedicated line.
	- Remote virtual computing.
	- Virtual private network (VPN). 
1. Data is encrypted before transmitted over the remote connection:
	- Remote access protocols natively have encryption functions.
	- Or, paired with a specific encryption protocol.

### Virtual Private Network (VPN)
1. A private network that uses the Internet to connect users. 
1. VPNs essentially integrate the global connectivity of the Internet with more layers of security of a private network

### VPNs (Virtual Private Networks)
1. Virtual Private Network:
	- A network connection encrypted from end to end that creates a private connection with more layers of security to a remote network.
	- Also referred to as a tunnel.
1. 3 models:
	- Site-to-site VPN.
	- Client-to-site VPN.
	- Host-to-host VPN.
1. CSUN VPN: https://www.csun.edu/it/vpn 

1. Router-based VPN:
	- Server-based VPNs on Windows networks.
1. VPN gateway connection:
	- Authenticates VPN clients.
	- Establishes tunnels for VPN connections.
	- Manages encryption for VPN transmissions.

### Remote Access Policy for Security & Privacy
1. Keep remote access up to date with patches, anti-malware software, and firewall.
1. Strong remote access password.
1. Passwords changed periodically. 
1. Encrypted storage devices.
1. Keep data secure.
1. Report loss or theft of remote devices.
1. Encrypt VPN software.
1. Disconnect remote devices to the open Internet or any other network.
1. Terminate remote sessions when not in use.

## Summary:
1. Describe virtualization technology: How virtual machines are connected with a network; how networking devices can be virtualized.
1. Describe cloud computing categories and business models. 
1. Discuss concerns about cloud connectivity and security.
1. Describe secure network connection using encryption protocols.
1. Configure remote access connection between devices.



