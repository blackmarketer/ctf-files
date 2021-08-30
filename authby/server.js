const express = require('express')
const cookieParser = require('cookie-parser')
const app = express()

app.use(cookieParser())

const SESSION = {}

const mustBeAuthenticated = (req, res, next) => {
	if(req.cookies){
	const token = req.cookies.token
	console.log(SESSION[token])
	if(token && SESSION[token]){
		next()
		}
	}
	res.send('not authorized')
}

app.get('/', mustBeAuthenticated, (req,res) => {
	res.send('you made it')
})

app.listen(80, () => console.log('running on port 80'))
