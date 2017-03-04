var express = require('express');
var app = express();

app.set('port', (process.env.PORT || 5000));

app.use(express.static(__dirname + '/public'));

// views is directory for all templatoe files
app.set('views', __dirname + '/views');
app.set('view engine', 'ejs');

app.get('/', function(request, response) {
  response.render('pages/form');
});
function calc(request){
	var result;
	switch(request.query.operation){
		case "addition":
			result = parseInt(request.query.num1) + parseInt(request.query.num2);
		break;		
		case "subtraction":
			result = request.query.num1 - request.query.num2;
		break;
		case "multiplication":
			result = request.query.num1 * request.query.num2;
		break;
		case "division":
			result = request.query.num1 / request.query.num2;
		break;


	}
	return result;
}

function calculateRate(request){
	var result;
	switch(request.query.choice){
		case "stamp":
			if(request.query.weight<3.5){
			result = ((request.query.weight - 1) * 0.21) + 0.49;}
			else if(request.query.weight = 3.5) {
				result = 1.12;
			}
			else{
				result = "Your weight is too big. Please select a different option.";
			}
		break;		
		case "meter":
			result = ((request.query.weight - 1) * 0.21) + 0.46;
		break;
		case "envelope":
			result = ((request.query.weight - 1) * 0.21) + 0.98;
		break;
		case "parcel":
			result = ((request.query.weight - 4) * 0.21) + 0.49;
		break;
	}
	return result;
}
app.get('/results', function(request, response) {
	response.render('pages/math', {
		weight: request.query.weight,
		choice: request.query.choice,
		result: calculateRate(request)
	});
});

app.get('/math_service', function(request, response) {
  response.json({
		num1: request.query.num1,
		num2: request.query.num2,
		operation: request.query.operation,
		result: calc(request)
		});
});

app.get('/math_service', function(request, response) {
  response.render('pages/ta');
});


app.listen(app.get('port'), function() {
  console.log('Node app is running on port', app.get('port'));
});


