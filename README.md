System Requirement to run this
PHP version 7+
 
How to run 
Download from Github 
Copy the code to Htdocs or www (as per your insalled apache/PHP software)
from your browser open http://localhost/meetingboxTest/ use port number in case if your installed apache running on port

User Guide
Type the address on text box and click on Search button
Data will load on same page in two separte box for google Map and Open street map


Implements 
index.php create the search form
For UI used JQuery Post method to call API and load data on same page 
to get the result used  getLatLongfrmAdd method of search Class 
Here we used factory design patern autoloader, namespaces 
to parse diffrent maps used googlemap and osmap class
 
