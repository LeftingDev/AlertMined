import os
import Cookie

print "Content-type: text/html\n\n"

if 'HTTP_COOKIE' in os.environ:
    cookie_string=os.environ.get('HTTP_COOKIE')
    c=Cookie.SimpleCookie()
    c.load(cookie_string)

    try:
        if c['AlertMined'].value == 'true':
            print "this user mine!"
        else:
            print "this user does not mine!"
    except KeyError:
        print "User is not answered the message!"                      
    
