# ip.replicas.io
The simple but useful purpose of this website is to provide the client his public IP address (in plain text).  

### Usage
##### Linux
```bash
# curl
curl ip.replicas.io

# wget
wget -qO - ip.replicas.io
```

##### JS
```javascript
$.get('http://ip.replicas.io', function(data) {
  console.log(data);
});
```

TODO:
add ability to check what client is accessing the index site:
- when curl or wget -> post just the ip
- when browser -> show a whole website (also build a "whole" website)
- build dockerfiles for nginx+php
- build ocp+k8s deplyoment config
- build docker compose file
