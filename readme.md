## Plugs

Radio-controlled plug sockets with a RESTful interface.

#### Simple PHP Server
This needs to be run in `screen` to allow SSH disconnect without killing the serve command.
```bash
screen -r
```

Serve and detatch:
```bash
./serve &
```

Find detatched process afterwards:
```bash
netstat -tulpn | grep :51515
```
