<!DOCTYPE html>
<html>
<head>
  <title>PYTHON TEST</title>
  <link rel="stylesheet" type="text/css" href="css/certifytest.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.js"></script>
  <script type="text/javascript" src="https://raw.githubusercontent.com/emn178/Chart.PieceLabel.js/master/src/Chart.PieceLabel.js"></script>
  
</head>
<body>
<div class="quizArea">
  <div class="multipleChoiceQues">
  <h1 class="mc_quiz">
    PYTHON QUIZ
  </h1>
    <div class="my-progress">
        <progress class="my-progress-bar" min="0" max="100" value="0" step="9" aria-labelledby="my-progress-completion">
        </progress>    
        <p id="my-progress-completion" class="js-my-progress-completion sr-only" aria-live="polite">0% complete</p>
    </div>
    <div class="quizBox">
      <div class="question"> </div>
      <div class="answerOptions"></div>
      <div class="buttonArea">
        <button id="next"  class="hidden">Next</button>
        <button id="submit"  class="hidden">Submit</button>
      </div>
    </div>
  </div>
  <div class="resultArea">  
    <div class="resultPage1">
      <div class="resultBox">
        <h1>Result Summary</h1>
      </div>
      <div class="briefchart">
        <svg height="300" width="300" id="_cir_progress">
          <g>
            <rect x="0" y="1" width="30" height="15"  fill="#ab4e6b" />
            <text x="32" y="14" font-size="14"  class="_text_incor">Incorrect : 12 </text>
          </g>
          <g>
            <rect x="160" y="1" width="30" height="15"  fill="#968089" />
            <text x="192" y="14" font-size="14" class="_text_cor">Correct : 12</text>
         </g>          
          <circle class="_cir_P_x" cx="150" cy="150" r="120" stroke="#ab4e6b" stroke-width="20" fill="none" onmouseover="evt.target.setAttribute('stroke', 'rgba(171, 78, 107,0.7)');" onmouseout="evt.target.setAttribute('stroke','#ab4e6b');"></circle>

          <circle class="_cir_P_y" cx="150" cy="150" r="120" stroke="#968089" stroke-width="20"  stroke-dasharray="0,1000" fill="none"  onmouseover="evt.target.setAttribute('stroke', 'rgba(150, 128, 137,0.7)');" onmouseout="evt.target.setAttribute('stroke','#968089');"></circle>
          <text x="50%" y="50%" text-anchor="middle" stroke="none" stroke-width="1px" dy=".3em" class="_cir_Per">0%</text>
          </svg>
      </div>

      <div class="resultBtns">
        <button class="viewanswer">View Answers</button>
        <button class="viewchart">View Chart</button>
        <button class="replay"><i class="fa fa-repeat" style="font-size:1em;"></i> <br/>Replay</button>
      </div>
    </div>

    <div class="resultPage2">
      <h1>Your Result</h1>
      <div class="chartBox">
        <canvas id="myChart" width="400" height="400"></canvas>
      </div>
      <button class="backBtn">Back</button>
    </div>

    <div class="resultPage3">
      <h1>Your Answers</h1>
      <div class="allAnswerBox">
        
      </div>
      <button class="backBtn">Back</button>
    </div>

  </div>
</div>

<!--javaScript-->

<script type="text/javascript">
  
var $progressValue = 0;
var resultList=[];


const quizdata=[
      {
        question:"What is used to take input from the user in Python?",
        options:["cin", "scanf()", "input()", "<>"],
        answer:"input()",
        category:1
      },
      {
        question:"Which operator is used in Python to import modules from packages?",
        options:[". operator", "* operator", "-> symbol", ", operator"],
        answer:". operator",
        category:2
      },
      {
        question:"What does the __init__() function do in Python?",
        options:["Initializes the class for use.", "This function is called when a new object is instantiated.", "Initializes all the data attributes to zero when called", "None of the above"],
        answer:"This function is called when a new object is instantiated.",
        category:3
      },
      {
        question:"Which of the following statements is true?",
        options:["In Python, same operator may behave differently depending upon operands.", "You can change the way operators behave in Python.", "Special method __add()__ is called when + operator is used.", "All of the above."],
        answer:"All of the above.",
        category:1
      },
      {
        question:"What is used to concatenate two strings in Python?",
        options:[". operator", "+ operator", "strcat() function", "^ operator"],
        answer:"+ operator",
        category:2
      },
      {
        question:"In python which is the correct method to load a module ?",
        options:["include math", "import math", "#include<math.h>", "using math"],
        answer:"import math",
        category:2
      },
      {
        question:"In Python, for and while loop can have optional else statement?",
        options:["Only for loop can have optional else statement", "Only while loop can have optional else statement", "Both loops can have optional else statement", "Loops cannot have else statement in Python"],
        answer:"Both loops can have optional else statement",
        category:2
      },
      {
        question:"Let a = [ 1,2,3,4,5 ] then which of the following is correct ?",
        options:["print(a[:]) => [1,2,3,4]", "print(a[0:]) => [2,3,4,5]", "print(a[:100]) => [1,2,3,4,5]","print(a[-1:]) => [1,2]"],
        answer:"print(a[:100]) => [1,2,3,4,5]",
        category:3
      },
      {
        question:"What is the similarity between a structure, union and enumeration?",
        options:["All of them let you define new values", "All of them let you define new data types", "All of them let you define new pointers", "All of them let you define new structures"],
        answer:"All of them let you define new data types",
        category:1
      },
      {
        question:"Out if list and tuples which are mutable ?",
        options:["list", "tuples","both", "none"],
        answer:"list",
        category:2
      },
      {
        question:"In python which keyword is used to start function ?",
        options:["function", "def", "try", "import"],
        answer:"def",
        category:3
      },
      {
        question:"Which function is used to open the file for reading in python ?",
        options:["fopen(filename, mode)", "open(filename, mode)","openfile(filename, mode)","open_file(filename, mode)"],
        answer:"open(filename, mode)",
        category:1
      }
    ];
/** Random shuffle questions **/
function shuffleArray(question){
   var shuffled=question.sort(function() {
    return .5 - Math.random();
 });
   return shuffled;
}

function shuffle(a) {
  for (var i = a.length; i; i--) {
    var j = Math.floor(Math.random() * i);
    var _ref = [a[j], a[i - 1]];
    a[i - 1] = _ref[0];
    a[j] = _ref[1];
  }
}

/*** Return shuffled question ***/
function generateQuestions(){
  var questions=shuffleArray(quizdata);    
  return questions;
}

/*** Return list of options ***/
function returnOptionList(opts, i){

  var optionHtml='<li class="myoptions">'+
    '<input value="'+opts+'" name="optRdBtn" type="radio" id="rd_'+i+'">'+
    '<label for="rd_'+i+'">'+opts+'</label>'+
    '<div class="bullet">'+
      '<div class="line zero"></div>'+
      '<div class="line one"></div>'+
      '<div class="line two"></div>'+
      '<div class="line three"></div>'+
      '<div class="line four"></div>'+
      '<div class="line five"></div>'+
      '<div class="line six"></div>'+
      '<div class="line seven"></div>'+
    '</div>'+
  '</li>';

  return optionHtml;
}

/** Render Options **/
function renderOptions(optionList){
  var ulContainer=$('<ul>').attr('id','optionList');
  for (var i = 0, len = optionList.length; i < len; i++) {
    var optionContainer=returnOptionList(optionList[i], i)
    ulContainer.append(optionContainer);
  }
  $(".answerOptions").html('').append(ulContainer);
}

/** Render question **/
function renderQuestion(question){
  $(".question").html("<h1>"+question+"</h1>");
}

/** Render quiz :: Question and option **/
function renderQuiz(questions, index){ 
  var currentQuest=questions[index];  
  renderQuestion(currentQuest.question); 
  renderOptions(currentQuest.options); 
  console.log("Question");
  console.log(questions[index]);
}

/** Return correct answer of a question ***/
function getCorrectAnswer(questions, index){
  return questions[index].answer;
}

/** pushanswers in array **/
function correctAnswerArray(resultByCat){
  var arrayForChart=[];
  for(var i=0; i<resultByCat.length;i++){
   arrayForChart.push(resultByCat[i].correctanswer);
  }

  return arrayForChart;
}
/** Generate array for percentage calculation **/
function genResultArray(results, wrong){
  var resultByCat = resultByCategory(results);
  var arrayForChart=correctAnswerArray(resultByCat);
  arrayForChart.push(wrong);
  return arrayForChart
}

/** percentage Calculation **/
function percentCalculation(array, total){
  var percent = array.map(function (d, i) {
    return (100 * d / total).toFixed(2);
  });
  return percent;
}

/*** Get percentage for chart **/
function getPercentage(resultByCat, wrong){
  var totalNumber=resultList.length;
  var wrongAnwer=wrong;
  //var arrayForChart=genResultArray(resultByCat, wrong);
  //return percentCalculation(arrayForChart, totalNumber);
}

/** count right and wrong answer number **/
function countAnswers(results){

  var countCorrect=0, countWrong=0;

  for(var i=0;i<results.length;i++){
    if(results[i].iscorrect==true)  
        countCorrect++;
    else countWrong++;
  }

  return [countCorrect, countWrong];
}

/**** Categorize result *****/
function resultByCategory(results){

  var categoryCount = [];
  var ctArray=results.reduce(function (res, value) {
    if (!res[value.category]) {
        res[value.category] = {
            category: value.category,
            correctanswer: 0           
        };
        categoryCount.push(res[value.category])
    }
    var val=(value.iscorrect==true)?1:0;
    res[value.category].correctanswer += val; 
    return res;
  }, {});

  categoryCount.sort(function(a,b) {
    return a.category - b.category;
  });

  return categoryCount;
}


/** Total score pie chart**/
function totalPieChart(_upto, _cir_progress_id, _correct, _incorrect) {

   $("#"+_cir_progress_id).find("._text_incor").html("Incorrect : "+_incorrect);
   $("#"+_cir_progress_id).find("._text_cor").html("Correct : "+_correct);

   var unchnagedPer=_upto;
   
    _upto = (_upto > 100) ? 100 : ((_upto < 0) ? 0 : _upto);

    var _progress = 0;

    var _cir_progress = $("#"+_cir_progress_id).find("._cir_P_y");
    var _text_percentage = $("#"+_cir_progress_id).find("._cir_Per");

    var _input_percentage;
    var _percentage;

    var _sleep = setInterval(_animateCircle, 25);

    function _animateCircle() {
      //2*pi*r == 753.6 +xxx=764
        _input_percentage = (_upto / 100) * 764;
        _percentage = (_progress / 100) * 764;

        _text_percentage.html(_progress + '%');

        if (_percentage >= _input_percentage) {
             _text_percentage.html('<tspan x="50%" dy="0em">'+unchnagedPer + '% </tspan><tspan  x="50%" dy="1.9em">Your Score</tspan>');
            clearInterval(_sleep);
        } else {

            _progress++;

            _cir_progress.attr("stroke-dasharray",_percentage + ',764');
        }
    }
}

function renderBriefChart(correct, total, incorrect){
  var percent=(100 * correct / total);
  if(Math.round(percent) !== percent) {
          percent = percent.toFixed(2);
  }

 totalPieChart(percent, '_cir_progress', correct, incorrect)
   
}
/*** render chart for result **/
function renderChart(data){
  var ctx = document.getElementById("myChart");
  var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
    labels: [ "Verbal communication", 
              "Non-verbal communication", 
              "Written communication", 
              "Incorrect"
            ],
    datasets: [
                {
                 
                  data: data,
                  backgroundColor: [  '#e6ded4',
                                      '#968089',
                                      '#e3c3d4',
                                      '#ab4e6b'
                                    ],
                  borderColor: [  'rgba(239, 239, 81, 1)',
                                  '#8e3407',
                                  'rgba((239, 239, 81, 1)',
                                  '#000000'
                                ],
                  borderWidth: 1
                }
              ]
    },
    options: {
         pieceLabel: {
          render: 'percentage',
          fontColor: 'black',
          precision: 2
        }
      }
    
  });
}

/** List question and your answer and correct answer  

*****/
function getAllAnswer(results){
    var innerhtml="";
    for(var i=0;i<results.length;i++){

      var _class=((results[i].iscorrect)?"item-correct":"item-incorrect");
       var _classH=((results[i].iscorrect)?"h-correct":"h-incorrect");
      

      var _html='<div class="_resultboard '+_class+'">'+
                  '<div class="_header">'+results[i].question+'</div>'+
                  '<div class="_yourans '+_classH+'">'+results[i].clicked+'</div>';

        var html="";
       if(!results[i].iscorrect)
        html='<div class="_correct">'+results[i].answer+'</div>';
       _html=(_html+html)+'</div>';
       innerhtml+=_html;
    }

  $(".allAnswerBox").html('').append(innerhtml);
}
/** render  Brief Result **/
function renderResult(resultList){ 
  
  var results=resultList;
  console.log(results);
  var countCorrect=countAnswers(results)[0], 
  countWrong=countAnswers(results)[1];
  
  
  renderBriefChart(countCorrect, resultList.length, countWrong);
}

function renderChartResult(){
   var results=resultList; 
  var countCorrect=countAnswers(results)[0], 
  countWrong=countAnswers(results)[1];
  var dataForChart=genResultArray(resultList, countWrong);
  renderChart(dataForChart);
}

/** Insert progress bar in html **/
function getProgressindicator(length){
  var progressbarhtml=" ";
  for(var i=0;i<length;i++){
    progressbarhtml+='<div class="my-progress-indicator progress_'+(i+1)+' '+((i==0)?"active":"")+'"></div>';
  }
  $(progressbarhtml).insertAfter(".my-progress-bar");
} 

/*** change progress bar when next button is clicked ***/
function changeProgressValue(){
  $progressValue+= 9;
  if ($progressValue >= 100) {
    
  } else {
    if($progressValue==99) $progressValue=100;
    $('.my-progress')
      .find('.my-progress-indicator.active')
      .next('.my-progress-indicator')
      .addClass('active');      
    $('progress').val($progressValue);
  }
  $('.js-my-progress-completion').html($('progress').val() + '% complete');

}   
function addClickedAnswerToResult(questions,presentIndex,clicked ){
  var correct=getCorrectAnswer(questions, presentIndex);
    var result={
      index:presentIndex,
      question:questions[presentIndex].question, 
      clicked:clicked,
      iscorrect:(clicked==correct)?true:false,
      answer:correct, 
      category:questions[presentIndex].category
    }
    resultList.push(result);

    console.log("result");
    console.log(result);
      
}

$(document).ready(function() {
  
  var presentIndex=0;
   var clicked=0;

  var questions=generateQuestions();
  renderQuiz(questions, presentIndex);
  getProgressindicator(questions.length);

  $(".answerOptions ").on('click','.myoptions>input', function(e){
    clicked=$(this).val();   

    if(questions.length==(presentIndex+1)){
      $("#submit").removeClass('hidden');
      $("#next").addClass("hidden");
    }
    else{

      $("#next").removeClass("hidden");
    }

     
  
  });



  $("#next").on('click',function(e){
    e.preventDefault();
    addClickedAnswerToResult(questions,presentIndex,clicked);

    $(this).addClass("hidden");
    
    presentIndex++;
    renderQuiz(questions, presentIndex);
    changeProgressValue();
  });

  $("#submit").on('click',function(e){
     addClickedAnswerToResult(questions,presentIndex,clicked);
    $('.multipleChoiceQues').hide();
    $(".resultArea").show();
    renderResult(resultList);

  });

  
  

   $(".resultArea").on('click','.viewchart',function(){
      $(".resultPage2").show();
       $(".resultPage1").hide();
       $(".resultPage3").hide();
       renderChartResult();
   });

    $(".resultArea").on('click','.backBtn',function(){
      $(".resultPage1").show();
       $(".resultPage2").hide();
       $(".resultPage3").hide();
        renderResult(resultList);
   });

    $(".resultArea").on('click','.viewanswer',function(){
      $(".resultPage3").show();
       $(".resultPage2").hide();
       $(".resultPage1").hide();
        getAllAnswer(resultList);
   });

  $(".resultArea").on('click','.replay',function(){
    window.location.reload(true);
  });

});


</script>


</body>
</html>