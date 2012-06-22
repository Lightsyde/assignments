# Intro to AJAX

AJAX (Asynchronous Javascript and XML) is an umbrella term that describes the process of contacting a web server directly using Javascript code in the browser. The process happens in the background so our users can still interact with our website.

## History

AJAX was a term coined in the early 2000s that covers a bunch of different technologies. In the background, AJAX generally uses a Javascript object called XMLHttpRequest (XHR)—created by Microsoft. The two most famous projects that started the AJAX movement are Gmail and Google Maps.

<http://en.wikipedia.org/wiki/Ajax_(programming)>

## The process

Generally, our browsers access the web servers for us: when we load a page, the browser contacts the server; when we click a link, the browser contacts the server. With traditional web applications every time you want new information on your page you’d have to go to another page—with a full page refresh.

AJAX changes the process. We can use Javascript to load extra information—directly from the server—in the background. Therefore by-passing a full page refresh. We only pass small snippets of information over the network.

The benefit of using AJAX is that it is much faster than a whole page refresh because we only have to load the small amount of data we need and not the whole design. From a usability point of view, our users perceive our application as being faster.

One of the major disadvantages of using AJAX is that our application now relies on Javascript—so it’s important to always provide a fallback. Another major issue with AJAX is from an accessibility point of view: it’s difficult for screen readers to know that a page was updated and which section was changed. [ARIA](http://www.w3.org/WAI/intro/aria) aims to solve this problem.

### Traditional process

1. Load a webpage, with tabs, as an example
2. Click to view another tab
3. Browser contacts server and reloads an entirely new page

### AJAX process

1. Load a webpage
2. Click to view another tab
3. Javascript loads just the new tab’s content in the background

### Code communication

In traditional applications we can think of our browser/user communicating directly with PHP on the web server. In AJAX applications our Javascript code communicates directly with the server and with PHP—without the users involvement, in the background.

![AJAX code communication](http://bradlet.github.com/mtm1526-demo-week-7/docs/ajax-vs-traditional.svg)