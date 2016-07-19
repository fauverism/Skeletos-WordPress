Skeletos WordPress Theme, Copyright 2014 Pete Schuster
Skeletos is distributed under the terms of the GNU GPL

---

##NOTES FROM slack 07/19/2016
Colin Weir [2:18 PM]  
@pete_schuster: do i just pull the all-digital files into the Skeletos theme folder?

Pete Schuster [2:25 PM]  
@colin: I would use npm to install all-digital into the project

[2:25]  
`https://github.comcast.com/Xfinity/all-digital/archive/v0.1.7.tar.gz`

[2:26]  
then you can pull in the files you need from the repo via the main sass manifest file in Skeletos

[2:26]  
`https://github.com/PeteSchuster/Skeletos-WordPress/blob/master/sass/main.scss`
 GitHub
PeteSchuster/Skeletos-WordPress
Skeletos-WordPress - WordPress theme based on the Skeletos framework 
 
 

[2:27]  
so `@import 'node_modules/all-digital/assets/sass/all-digital.scss'`

[2:28]  
or individual components like `@import 'node_modules/all-digital/assets/sass/all-digital/components/_buttons.scss'`

[2:29]  
if you’re familiar with how compass works, the sass import structure is similar