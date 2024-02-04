# smoker - smoke v2

## introduction

"smoker" is a lightweight PHP application which can crawl through a website and try to 
find common mistakes by checking HTML output. It's a further development of "smoke" which 
is not compatible to current PHP stack anymore. It gives you fast feedback if a website
runs well, or if there is anything you should fix.

## run

```bash
bin/smoker scan "https://www.amazon.com"
```

## requirements

- installed PHP 8.2+