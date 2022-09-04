from multipleChoiceQuizQuestion import Question

question_prompts = [
    "Which of these animal names is also a term often used to refer to a spy?\n(a) Bull\n(b) Mole\n(c) Flea\n\n",
    "Homeowners buy surge protectors to protect their possessions from unexpected surges of what?\n(a) Electric current\n(b) Water flow\n(c) Air pressure\n\n",
    "As part of its maintenance, which of these tourist attractions requires the use of embalming fluid?\n(a) Stonehenge\n(b) Hoover Dam\n(c) Lenin's Tomb\n\n"
]

questions = [
    Question(question_prompts[0], "b"),
    Question(question_prompts[1], "a"),
    Question(question_prompts[2], "c"),
]

def run_test(questions):
    score = 0
    for question in questions:
        answer = input(question.prompt)
        if answer == question.answer:
            score += 1
    print("You got " + str(score) + "/" +  str(len(questions)) + " correct")

run_test(questions)