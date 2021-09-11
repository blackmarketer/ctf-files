from flask import Flask, request
from jinja2 import Template

app = Flask(__name__)

@app.route("/")
def index():
    g = request.args.get('g', 'anonymous')
    text = Template('<style>body {display: flex;align-items: center;justify-content: center;overflow: hidden;width: 100vw;height: 100vh;font-family: "Maitree", serif;}</style><h1 align="center">Welcome ' + g + '</h1>')
    return text.render()
  
if __name__ == "__main__":
    app.run()
