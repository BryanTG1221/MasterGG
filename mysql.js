const mysql = require('mysql')

const connectionMasterGG = mysql.createConnection({
    host:'localhost',
    user:'amser',
    password:'N0p0dras',
    database:'mastergg'
})

connectionMasterGG.connect((err) => {
    if(err) throw err
    console.log('La conexion funciona')
})

connectionMasterGG.query('SELECT * FROM usuarios', (err, rows) => {
    if(err) throw err
    console.log('Los datos de la tabla son:')
    console.log(rows)
})

connectionMasterGG.end() /*Cerrar Proceso */