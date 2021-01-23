var MongoClient = require('mongodb').MongoClient; //To import the library 

MongoClient.connect('mongodb://localhost:27017/OnlineVotingSystem', (err, db) => {

    if (err) {

        return console.log('Unable to connect');
    }

    console.log("Connected to database");

    db.collection('OnlineVotingSystem').find({
        aadharnumber: '778969795103',
        dateofbirth: '1997/11/15'
    }).toArray().then((docs) => {

        console.log('OnlineVotingSystem');

        console.log(JSON.stringify(docs, undefined, 5));

    }, (err) => {

        console.log("Unable to fetch from database");

    });


    db.close();


});
