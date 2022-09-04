secret_word = "python"
guess = ""
guess_count = 0
guess_limit = 3
out_of_guesses = False

print("Guessing game!")

while guess != secret_word and not(out_of_guesses):
    if guess_count < guess_limit:
        print("Guesses left: " + str(guess_limit - guess_count))
        guess = input("Enter quess: ").lower()
        guess_count += 1
    else:
        out_of_guesses = True

if out_of_guesses:
    print("Out of guesses, you lose.")
else:
    print("You win!")