### Homework 1

> [!IMPORTANT]
> if you are using ....
> **Mac/Macbook**, install MAMP (**NOT** MAMP PRO)
> **Windows**, install MAMP (**NOT** MAMP PRO) or XAMPP
> Other platform, please contact instructor by email or in the Breakout Rooms during lab session to discuss

> [!WARNING]
> **Please** do **NOT** use Virtual Machines (VMs) or containers (Docker, etc.)
> Unless this has been cleared with the instructor!!!!
> VMs and containers will only be allowed if you have prior experience using these for web server + database, 
> *or* if this is the only option for your computer.


1) [Download](https://www.mamp.info/en/windows/) MAMP **NOT MAMP PRO** or XAMPP.
2) Configure the web server to be **Apache** and configure it to listen on port 8080.
3) Install [Wireshark](https://www.wireshark.org/download.html) on your computer. (This is also free like MAMP).
4) Start the Webserver (at least apache, if not all services).
5) Using the text editor create a file named index.html, with the following contents...

    ```html
    <!DOCTYPE html>
    <html>
        <head><title>foobar</title></head>
        <body>
            ZZYZX
        </body>
    </html>
    ```
6) Please this index.html from step 5 into the DocumentRoot directory of your Apache Web server

**Verify**

- Can you browse to index.html from your host computer by opening a web browser and browsing to http://127.0.0.1:8080

- **No** look back through steps 1 - 6 
- **Yes** move to step 7

Once you get this to work  **[CLEAR THE BROWSER CACHE](https://youtu.be/FVdGaaLZnXU?t=8)** on your host computer, and by answering the following questions...

7) What is the full path of the DocumentRoot directory on your Web server?
8) Open Wireshark and start a new capture of a **Loopback** interface which is often named lo or lo0 or similar 
9) From the host machine, refresh (or re-browse) to http://127.0.0.1:8080
10) Stop the Wireshark capture, and use it to answer the following questons ...

**Questions**

11) In a Transmission Control Protocol (TCP) handshake that begins the exchange of this web page, what is the port number of the browser that initiates communication (sends the packet)? Hence, we will refer to this packet as *packet0* . 
> hint: The TCP handshake can be identified from the TCP flags used in the first 2 packets "SYN, SYN/ACK"
> hint2: Packet 0 will be sent from the browser port number to port 8080 (The web server)

12) What are the initial TCP sequence numbers (reported as "sequence number (RAW)") in the tcp header used by each side of the web page  exchange?

13) How many packets into the conversation is the packet which contains the text of the webpage index.html?
14) What is the first line of the HTTP header in the packet which contains the text of the webpage index.html?

    - Does this line of the header indicate **Success** or **Failure**?

> hint: If you see the status code 304, you probably **FORGOT** to clear your browser cache look add to above #7 to see how to do that. Once that is done repeat steps 8-10. 

15) How many packets into the conversation is the packet which ***contains the get request*** from the browser to the web server? 

    - What is the first line of the get request HTTP header (starts with the word "GET")?
    - What text is in the "User-Agent" field of this header? (What does this User-Agent field indicate?)

16) Which side is the first to signal an **END** to the conversation (in other words, send the TCP FIN flag) ?

17) What are the TCP Flags of the last packet sent in the conversation? Which side sends this packet? 
