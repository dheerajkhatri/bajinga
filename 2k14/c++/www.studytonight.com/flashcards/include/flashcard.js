$('#showAnswer').click(function() {
    $('.flashcard').toggleClass('flipped');
    return false;
  });

    $.getJSON('data.json', function(data) {
  	counter = 0;
  	var question = "";
  	var answer = "";
  	var totalNumOfQue = data.quiz.length;
  	//593 is the total width of the bar, that can be filled up
  	var progress = 593/totalNumOfQue ;
  	$("#numOfQuestions").innerHtml = totalNumOfQue+" Questions "
  	question = data.quiz[0].question;
  	answer = data.quiz[0].answer;
  	document.getElementById("question").innerHTML=question;
  	document.getElementById("answer").innerHTML=answer;
  	
  	$(document).keydown(function(e){
         if (e.keyCode == 37) { 
           $('#previousQuestion').trigger("click");
           return false;
          }
        });
        
        $(document).keydown(function(e){
         if (e.keyCode == 39) { 
           $('#nextQuestion').trigger("click");
           return false;
          }
        });
        
        $(document).keydown(function(e){
         if (e.keyCode == 32) { 
           $('.flashcard').toggleClass('flipped');
           return false;
          }
        });
  	
  	$('#nextQuestion').on("click",function () {
  	    if(counter < totalNumOfQue )
  	{
  	  $(".meter > span").animate({width: progress*(counter + 1)}, 500);
          counter = (counter + 1);
        }
        if($('.flashcard').attr('class') == 'flashcard flipped')
        {
         $('.flashcard').toggleClass('flipped');
        }
        question = data.quiz[counter].question;
  	answer = data.quiz[counter].answer;
  	hint = data.quiz[counter].hint;
  	document.getElementById("question").innerHTML=question;
  	document.getElementById("answer").innerHTML=answer;
  	return false;
    });
    $('#previousQuestion').on("click",function () {
        if(counter > 0)
        {
          counter = (counter - 1);
        }  
        if($('.flashcard').attr('class') == 'flashcard flipped')
        {
         $('.flashcard').toggleClass('flipped');
        }
        question = data.quiz[counter].question;
  	answer = data.quiz[counter].answer;
  	document.getElementById("question").innerHTML=question;
  	document.getElementById("answer").innerHTML=answer;
  	$(".meter > span").animate({width: progress*counter}, 500);
  	return false;
    });
    return false;
  });