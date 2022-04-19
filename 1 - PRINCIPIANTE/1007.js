var entrada = require('fs').readFileSync('/dev/stdin', 'utf8')
var lineas = entrada.split('\n')

var a = parseInt(lineas.shift())
var b = parseInt(lineas.shift())
var c = parseInt(lineas.shift())
var d = parseInt(lineas.shift())

console.log('DIFERENCA = ' + (a*b-c*d))