<!DOCTYPE html>
<html>
<head>
  <title>Quiz Website</title>
  <style>
   * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      
      /* Body styles */
      body {
        
        display: flex;
    justify-content: flex-start;
    font-family: Arial, sans-serif;
    line-height: 1.6;
      }
      
      /* Header styles */
      header {
        width: 100%;
        height: 60px;
        background:linear-gradient(135deg,rgb(96, 2, 96),rgb(212, 114, 130));
        color: #fff;
       
        position:fixed;
        display: flex;
        justify-content: space-between;
      }
      .btn {
        cursor: pointer;
        display: inline-block;
        padding: 10px 20px;
        background-color:rgb(255, 255, 255);
        color: #000000;
        text-decoration: none;
        border-radius: 4px;
        margin: 10px;
      }
      .btn:hover
      {
        background: rgb(42, 141, 68);
        color: rgb(255, 255, 255);
      }
      header h1 {
        font-size: 40px;
        margin-bottom: 20px;
      }

      .sec1 {
       padding-top:50px;
       margin-left: 40px;
       height: auto;
       width: 50%;
       color: #000000;
       /* display: flex;
       justify-content: center;
       align-items: center; */
       
     }
    .quiz-container {
      width: 500px;
    border: 0;
    outline: 0;
    padding: 20px;
    height: auto;
    border-radius: 5px;
    box-shadow: -1px -1px 50px rgb(255, 255, 255,0.4), 1px 1px 10px rgb(0 0 0 / 15%);
    background: transparent;
    font-size: 15px;
    color: rgb(0, 0, 0);
    cursor: pointer;
    margin-top: 50px;
    }
    .sec2 {
      
       margin-bottom: 50px;
       height: auto;
       width: 170px;
       padding-top: 50px;
       color: #000000;
       /* display: flex;
       justify-content: center;
       align-items: center; */
       
     }
     .quiz-container2 {
      width: 470px;
    border: 0;
    outline: 0;
    padding: 20px;
    height: auto;
    border-radius: 5px;
    box-shadow: -1px -1px 50px rgb(255, 255, 255,0.4), 1px 1px 10px rgb(0 0 0 / 15%);
    background: transparent;
    font-size: 15px;
    color: rgb(0, 0, 0);
    cursor: pointer;
    margin-top: 50px;
    }
.quiz
{
  padding: auto;
}

.outer
{
  border-bottom: 1px green solid;
    margin-bottom: 15px;
}
    .question {
      margin-bottom: 10px;
      font-size: 15px;
    }

    .choices {
      display: flex;
      flex-direction: column;
      font-size: 15px;
      margin-bottom: 20px;
    }
label
{
  margin-bottom: 10px;
}
    .submit-btn {
      display: block;
      background: rgb(84, 166, 84);
      margin-top: 10px;
      width: 90px;
      height: 30px;
      border-radius: 5px;
      border-color: rgb(84, 166, 84);
    }
.submit-btn:hover{
  opacity: 80%;
}
    .result {
      margin-top: 20px;
      font-weight: bold;
    }
    .o{
      
  background: #efebeb;
  padding-top: 10px;
  
  padding-left: 7px;
  font-size: 15px;
  margin-top: 10px;
  
  color: rgb(235 5 5);

    }
    .ou{
      
  background: #efebeb;
  
  padding-bottom: 10px;
  padding-left: 7px;
  font-size: 15px;
  
  margin-bottom: 10px;
  color: rgb(3, 100, 142);
    }
    .g
    {
      border-radius: 5px;
  background: #efebeb;
  padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 7px;
  font-size: 15px;
  margin-top: 10px;
  margin-bottom: 10px;
  color: rgb(0, 171, 0);
    }
  </style>
</head>
<body>
  <header>
    <h1>QuizzArea</h1>
    <a class="btn" href="first.php">Back To Home Page</a>
  </header>
  <section class="sec1">
  <div class="quiz-container">
   
      <p class="g">C Programming :: Section 1</p>
    
    <div id="quiz"></div>
    <button class="submit-btn" >Submit</button>
    
  </div>
</section>
<section class="sec2">
  <div class="quiz-container2">
   
      <p class="g" >C Programming :: Section 1 Result</p>
    
    
   
    <div id="result"></div>
  </div>
</section>

  <script>
    // Define the quiz questions and answers
    var questions = [
    {
        question: "1. Who is the father of C language?",
        choices: [" Steve Jobs", " James Gosling", " Dennis Ritchie", " Rasmus Lerdorf"],
        correctAnswer: 2
      },
      {
        question: "2. Which library functions help users to dynamically allocate memory?",
        choices: [" memalloc()and alloc() ", " malloc() and memalloc()", " malloc() and calloc()", " memalloc() and calloc()"],
        correctAnswer: 2
      },
      {
        question: "3. Choose the correct function which can return a reminder by dividing -10.0/3.0?",
        choices: [" rem = mod(-10.0, 3.0);", " rem = fmod(-10.0, 3.0);", " rem = modf(-10.0, 3.0);", " Division of floating point values can’t return reminder"],
        correctAnswer: 1
      },
      {
        question: "4. All keywords in C are in ____________",
        choices: [" LowerCase letters", " UpperCase letters", " CamelCase letters", "  None of the mentioned"],
        correctAnswer: 0
      },
      {
        question: "5. Which of the following is true for variable names in C?",
        choices: [" They can contain alphanumeric characters as well as special characters", " It is not an error to declare a variable to be one of the keywords(like goto, static)", " Variable names cannot start with a digit", "  Variable can be of any length"],
        correctAnswer: 2
      },
      {
        question: "6. Which is valid C expression?",
        choices: [" int my_num = 100,000;", " int my_num = 100000;", "  int my num = 1000;", " int $my_num = 10000;"],
        correctAnswer: 1
      }    
    ];

    var score = 0;
    
    var quizElement = document.getElementById("quiz");
    var submitButton = document.querySelector(".submit-btn");
    var resultElement = document.getElementById("result");

    function displayQuiz() {
      for (var i = 0; i < questions.length; i++) {
        var question = questions[i];
        var outerDiv = document.createElement("div");
        outerDiv.classList.add("outer");

        var questionDiv = document.createElement("div");
        questionDiv.classList.add("question");
        questionDiv.textContent = question.question;

        var choicesDiv = document.createElement("div");
        choicesDiv.classList.add("choices");

        for (var j = 0; j < question.choices.length; j++) {
          var choice = document.createElement("input");
          choice.type = "radio";
          choice.name = "answer" + i;
          choice.value = j;

          var choiceLabel = document.createElement("label");
          choiceLabel.appendChild(choice);
          choiceLabel.appendChild(document.createTextNode(question.choices[j]));
          choicesDiv.appendChild(choiceLabel);
          
          outerDiv.appendChild(questionDiv);
          outerDiv.appendChild(choicesDiv);
   
          // document.getElementById("outerDiv").appendChild(outerDiv);
          
        }

        // quizElement.appendChild(questionDiv);
        // quizElement.appendChild(choicesDiv);
        quizElement.appendChild(outerDiv);
      }
    }

    function checkAnswers() {
     
      var answerElements = document.querySelectorAll("input[type=radio]:checked");

      for (var i = 0; i < answerElements.length; i++) {
        var answerElement = answerElements[i];
        var questionIndex = parseInt(answerElement.name.substring(6));
        var selectedAnswer = parseInt(answerElement.value);

        if (selectedAnswer === questions[questionIndex].correctAnswer) {
          score++;
        }
      }

      showResult();
    }
    
    function showResult() {
      
      // quizElement.style.display = "none";
      // submitButton.style.display = "none";
      resultElement.textContent = "You scored " + score + " out of " + questions.length + " correct!";
      
 resultElement.style.display = "block";

      // Show the correct answers
      var answerList = document.createElement("p");
      answerList.classList.add("g");
      for (var i = 0; i < questions.length; i++) {
        var correctAnswer = questions[i].correctAnswer;
        var listItem = document.createElement("p");
        listItem.classList.add("o");

        var Item = document.createElement("p");
        Item.classList.add("ou");

        listItem.textContent = "Question "+questions[i].question;
        Item.textContent = "Answer : "+ questions[i].choices[correctAnswer];
        answerList.appendChild(listItem);
        answerList.appendChild(Item);
      }

      resultElement.appendChild(answerList);

    }

    // Start the quiz
    displayQuiz();

    // Add event listener to the submit button
    submitButton.addEventListener("click", checkAnswers);
  </script>
</body>
</html>
