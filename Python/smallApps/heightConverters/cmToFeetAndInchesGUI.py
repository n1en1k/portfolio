import tkinter as tk
import math

foot = 30.48

def convert_height():
    height_cm = entry_box.get()
    height_cm = float(height_cm)
    try:
        user_height_feet = height_cm // foot

        # convert to inches
        rem = height_cm / foot
        result = math.modf(rem)
        dec, integer = result
        user_height_inches = dec * 12

        # round to whole number
        user_height_feet = round(user_height_feet)
        user_height_inches = round(user_height_inches)
    except ValueError:
        textbox['text'] = 'Invalid value'
        return
    textbox['text'] = str(user_height_feet) + ' ft ' + str(user_height_inches) + ' inches'


window = tk.Tk()
window.geometry('300x200')
window.title('cm to feet and inches')

label = tk.Label(text = 'Type height in cm:')
label.place(x=10, y=20, height=30)

entry_box = tk.Entry(text = "")
entry_box.place(x=10, y=60, width=80, height=30)

button = tk.Button(text='Convert', command=convert_height)
button.config(font='16')
button.place(x=10, y=120, width=100, height=35)

label2 = tk.Label(text = 'Converted height:')
label2.place(x=140, y=20, height=30)

textbox = tk.Message(text='0.00', width=200, font='21')
textbox.place(x=140, y=60)

window.mainloop()