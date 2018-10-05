## User-Agent and Referer


### Exploit

To use this exploit run  `/Ressouces/run.sh`

This script send a request with custom user-agent and referer

### How to Prevent

The most important thing you can do, of course, is make sure all security patches are regularly installed. This is a single-point-of-failure that allows this type of attacks to keep on going.

If you are a security professional, you should be working in hunting mode rather than in fishing mode. Don’t just wait for your security suits to notify you when they find something. Go look for it yourself. The User-Agent string is very easy to log and inspect, whether manually or using a simple script. It might not give you a real-time alert, but if such an attack has managed to make it through your defenses, at least you’ll be able to find it and mitigate it.