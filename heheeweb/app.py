#!/usr/bin/env python

import web,sys,urllib,base64,StringIO

url = ('/', 'index')
site = web.template.render('index/')
app = web.application(url, globals())

class index:
    def GET(self):
        c = ''
        guest = 'M52WK43U'
        admin = 'MFSG22LO'
        flag = "flag{fake}"
        o = ''

        stdout = sys.stdout
        sys.stdout = reportSIO = StringIO.StringIO()

        try:

            get_input = web.input()
            cookie = web.cookies().get('cookie') if 'cookie' in web.cookies() else None
            if not cookie:
                web.setcookie('cookie', 'M52WK43U' , expires="", domain=None, secure=False)
            if (cookie):
                try:
                    o = eval(base64.b32decode(str(cookie)))
                    if (o == guest):
                        c = str(c) + 'Not Authorised'
                    elif (o == admin):
                        c = str(c) + flag
                    else:
                        c = str(c) + str(o) + 'No user found'
                except:
                    pass
	    if (c==''):
		c='Unknown user'


            reportStr = reportSIO.getvalue()
            sys.stdout = stdout
            output = str(reportStr) + str(c)
            return site.index(output)

        except Exception as error:

            print(error)
            return error




if __name__ == "__main__":
    app.run()

