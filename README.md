![Captain Holt gif](https://media.giphy.com/media/kyoQiuMBFJiNl8HOv9/giphy.gif)

# Brooklyn Nine Nine

This website is centered around one of my favourite tv-series. Earlier this year the show aired its 8th and final season, which is now available on netflix in Sweden. I have followed the show since its start in 2013 and when I was waiting for new seasons I sometimes rewatched the seasons that were available.
I chose the theme for the project pretty quickly, because I wanted to set a theme early and get to work fast. I had just finished the last season and it was fresh in my mind.
Here is the link to the site: https://bosse.ai/brooklyn-nine-nine/

## Installation

There are 2 major content pages of the site, the **characters-page** and the **quiz-page**.
We can navigate to the pages using either the header or the frame on the landing page.

On the **characters-page** we can go to learn about the six main characters, the site will always load their info cards in a different order.
The names of the actors are also links to their IMDB.com pages, and if hovered shows some short info about the actor.
Now that we have refreshed our memories of the characters in the show we can take the **quiz**.
The quiz gives us three options to every question, one is always right. When we submit our answers we will be directed to the results page where we can see how many points we got and be evaluated.

## Code Review

Code review written by Petter Jakobsson(https://github.com/jaken92).

1. Slightly confusing variable name on $inputN, quiz.php, line 10. The functionality could be made clearer by calling it something like $inputNum.
2. The relation between $inputN, $counter and the foreach with the nestled forloop in quiz.php could be further explained by a comment to allow for easier understanding. It is a nice way to achive the desired layout of the quiz, but it takes a fair amount of investigation to understand what all the variables are for. 
3. functions.php getPoints(), at first glance it looks like a wrong answer could give a false point further down in the statement. Since you are using a logic of matching one of the answers answer1-answer3, answer4-answer6, answer7-answer9 it would be nice with a comment explaining this. 
4. Functions.php line 4 getPoints() function. I think another way to achieve the same result would be to store the correct answers in an array and call a function with arguments userAnswer and correctAnswer as arguments foreach stored user answer. This way i feel the code would be more dynamic if youd like to expand the quiz as there would be no need to change the function.
5. To take the page to the next level, making the site responsive would be a nice upgrade. 
6. Overall very nice code for readability, i had to nitpick to find things. =)



# Testers

Tested by the following people:

1. Simon
2. Anna
