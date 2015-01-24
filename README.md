# Website-Edunet

## Getting a Local Preview

### Installing required Software

The website can probably adapted to run on almost any server having a PHP interpreter, but apache 
and PHP 5.14 is what we use on our website. It can be downloaded as a single package called **XAMPP** 
from www.apachefriends.org. We use it on a Windows machine, but you can use it just as easily on a 
Mac or a Linux Computer.

You need to downlaod no extra framework to run the website. All support libraries are included in
the dependencies folder, and no installation is required.

### Deploying the code

Deploying the code is easy, just download our code as ZIP from GitHub, or clone the repository, and
and after extracting the code copy all the contents of the folder, and paste them in to your server's
folder, htdocs if you are using Apache. Make sure the folder is empty before you paste in all of the code.
Remeber that you have to copy only the contents of the ZIP file, and not an encapsulating folder, so
there should be several sub-folders under htdocs once you have copied the code.

After this just type in locahost or (if that doesn't work) 127.0.0.1 in your browser
(preferrably Chrome) and hit enter. Hopefully, you can see our website.

### Editing the Hosts file

If you want a different URL to access our website, you can edit the hosts file, which is the local DNS
for your system. On a Windows machine, you can find it in C:/Windows/System32/drivers/etc/hosts, and
on a linux machine, in the folder /etc/hosts. Open the file, and append the folling line to it:

        127.0.0.1       sub.sampleurl.com
    
Make sure to save the file in the same folder, and with the same name. If wandows doesn't allow saving
there, save it somewhere else, and copy it to the original folder, replacing the existing file.
If an extension keeps getting added, you can use the command prompt to execute the following command
after navigating to the desired directory:

        C:\Windows\System32\drivers\etc> ren    hosts.txt   hosts

And now you can use the new url!

## Contributing to the Project

### Browser and Device Support

The website uses a responsive layout, so we would prefer that all of the front-end code be reponsive.
We think it is best to fit the page to the device with, and disable horizontal scrolling. Moreover 
it would be best not to make people type out big forms on Mobile, so try to autofill data from their 
profiles.

We are not really sure about about which browsers we support, but we sure do support the latest release
of **Google Chorme**. We want that the code we have should work fine in many browsers, but we are
not enforcing that. Code is only tested here in Chrome and Safari. We do not expect that the code
contributed to this repository will be immune to Internet Explorers quirks.

### Code Quality

We expect that all of the code contributed to this repository will be error free, and comply fully 
to the conventions of the language it is written in. We also expect the code to be free from typo's.
Enlisted below are some specific rules you should take care of:

1. Make sure that all of your **HTML tags** and brackets are balanced. All of the tags should be
balanced in indivisual files, or else all of the tags opened in one file, should be close in another.
If you have a header, all of the tags left open there should be closed in the footer and not in the
main HTML or PHP file.
2. Avoid any redundancy in your code. Make sure all of your headers and footers, as well as stylesheets
and javascripts files should be **abstracted out** to other files. All of the CSS and JavaScript should 
be kept in external folder, and they should not be overly mingled with the HTML or PHP code.
3. All of your variable and funcations should be **properly named**, and the code should be well documented.
These can be easily checked using some of *JetBrains IDE's and tools*, such as PhpStorm, WebStorm, 
PyCharm, or UpSource.

All of your code will be finally cheched for quality by using JetBrains IDE's and tools, so try to make
sure that your code passes their tests.

## Code Library

### Not quite there yet

We are trying to build a library from the code that we use on the website, called elements. It is a JavaScript
and CSS library, and is meant to add some extra features to existing frameworks like foundation and bootstrap.
The elements framework should be very easy to use, and minimize the amount of code we write, and that should be
practiced to the best it can, even if it comprizes the efficiency of the code.

### Using the current form

Presently there are only like 4 elements and 4 functions in the library, so it won't be a great help.
But if you still want to see, you can download **elements.css**, **elements.js** and **autocomplete.js**
from this repository, and then just include them in your files. The only documentation available is 
the comments in those files.

## All help highly appriciated

Whether you contribute to our website, or our library, or make a small new web app, or just point out an issue,
we are very grateful. We have a long way to go and need everyone's help to get there, so please, help in any 
way you can.
