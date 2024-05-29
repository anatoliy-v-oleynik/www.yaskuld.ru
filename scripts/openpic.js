function OpenPicture(url)
{
    var win=window.open('picture.html?'+escape(url),'win','resizable=no, status=yes, toolbar=no, titlebar=no, scrollbars=no, menubar=no, location=no,width=200, height=200, top=0,left=0');
    win.focus();
    return false;
}