<div align=center>
 
# KILLER DDoS
 <p>
 <img src="https://img.shields.io/github/stars/HyukIsBack/KILLER-DDoS?color=%23DF0067&style=for-the-badge"/> &nbsp;
 <img src="https://img.shields.io/github/forks/HyukIsBack/KILLER-DDoS?color=%239999FF&style=for-the-badge"/> &nbsp;
 <img src="https://img.shields.io/github/license/HyukIsBack/KILLER-DDoS?color=%23E8E8E8&style=for-the-badge"/> &nbsp;
 
</p>
 DDoS Script (DDoS Panel) with Multiple Bypass<br>( Cloudflare UAM,CAPTCHA,BFM,NOSEC / DDoS Guard / Google Shield / V Shield / Amazon / etc.. )<br/><br/>
 Don't attack any websites you don't own it<br/>
 This was created for educational purposes<br/>
 All responsibilities and disadvantages of using this program is for the user.
 

## Language</br>

 <img src="https://img.shields.io/badge/Python-FFDD00?style=for-the-badge&logo=python&logoColor=blue"/></br>
</div>

## Menu
![KILLER](https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEijOfH2jgHKlbMHk7rx77bO3hgSrlr27e1yfeWfw3TTA91VOSQKrxPKRYF7e1VvC9c4YswuCLf1X8Ko9Y9gv9ueUnj3mdLflEBwPWSeb89lDbaazdxJDZikQXK-OqegCzKGQBnLqn67HnWKjh3pmxFKB1Khw3n3lQIgP5ODbxpZ4xME1F_JQdLmkF2wutIg/w640-h428/2a773e00-192a-11ea-9f4c-1990874fc1b4.png)

## Methods

```sh
  [Layer 7]
 - cfb     | Bypass CF attack
 - pxcfb   | Bypass CF attack with proxy
 - cfreq   | Bypass CF UAM, CAPTCHA, BFM, etc,, with request
 - cfsoc   | Bypass CF UAM, CAPTCHA, BFM, etc,, with socket
 - pxsky   | Bypass Google Project Shield, Vshield, DDoS Guard Free, CF NoSec With Proxy
 - sky     | Sky method without proxy
 - http2   | HTTP 2.0 Request Attack 
 = pxhttp2 | HTTP 2.0 Request Attack With Proxy
 - spoof   | Spoof Attasck
 - pxspoof | Spoof Attack with Proxy
 - get     | Get  Request Attack
 - post    | Post Request Attack
 - head    | Head Request Attack
 - soc     | Socket Attack
 - pxraw   | Proxy Request Attack
 - pxsoc   | Proxy Socket Attack
 
  [Layer 4]
  -udp     | UDP Attack
  -tcp     | TCP Attack
  
  [Tools]
 - Dns     | Classic DNS Lookup
 - Geoip   | Geo IP Address Lookup
 - Subnet  | Subnet IP Address Lookup
```


## Usage on Linux
```sh
You must use Python 3.9 or higher

git clone https://github.com/HyukIsBack/KILLER-DDoS.git

Install Python3 modules
 - pip3 install -r requirements.txt  or  pip install -r requirements.txt
Install Chrome (or update it lastest version)
 - wget https://dl.google.com/linux/direct/google-chrome-stable_current_amd64.deb
 - apt-get install ./google-chrome-stable_current_amd64.deb

OR
 - python3 setup.py

```

## Example
```sh
Use DDoS Panel   : python3 main.py
Use command line : python3 main.py <method> <target> <thread> <time>
      └──────────> python3 main.py cfb https://example.com 100 30
```
