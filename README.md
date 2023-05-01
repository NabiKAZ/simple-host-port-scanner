# Simple multi hosts and ports scanner

## Usage
```
git clone https://github.com/NabiKAZ/simple-host-port-scanner.git
cd simple-host-port-scanner
php index.php
```

## Parameters
In a few starting lines, you can change a few options:
- `$hosts`: You can add hosts to this array.
- `$ports`: You can add ports to this array.
- `$timeout`: Maximum time to test each connection in seconds.

Sample params:
```
$hosts = [
    '173.245.49.3',
    '216.239.38.120',
];
$ports = [
    80,
    443,
    22,
];
$timeout = 1;
```

## Sample Output
```
PS C:\Nabi\simple-host-port-scanner> php .\index.php
Host: 173.245.49.3
      173.245.49.3:80 ... CLOSED.
      173.245.49.3:443 ... CLOSED.
      173.245.49.3:22 ... CLOSED.
Host: 216.239.38.120
      216.239.38.120:80 ... *** OPEN ***
      216.239.38.120:443 ... *** OPEN ***
      216.239.38.120:22 ... CLOSED.

ALL OKs:
216.239.38.120:80
216.239.38.120:443
```
