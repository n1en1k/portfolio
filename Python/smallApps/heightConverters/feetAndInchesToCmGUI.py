import tkinter as tk

def convert_height():
    height_feet = entry_box.get()
    height_feet = float(height_feet)
    height_inches = entry_box2.get()
    height_inches = float(height_inches)
    try:
        # convert feet to inches and add it to existing inches
        height_inches += height_feet * 12

        #convert inches to cm
        user_height_cm = height_inches * 2.54

        # round to 1 decimal
        user_height_cm = round(user_height_cm, 2)
    except ValueError:
        textbox['text'] = 'Invalid value'
        return
    textbox['text'] = str(user_height_cm) + ' cm'


window = tk.Tk()
window.geometry('300x300')
window.title('feet and inches to cm')

label = tk.Label(text = 'Type height:')
label.place(x=10, y=20, height=30)

label2 = tk.Label(text = 'feet:')
label2.place(x=10, y=60, height=30)

label3 = tk.Label(text = 'inches:')
label3.place(x=10, y=140, height=30)

entry_box = tk.Entry(text = "")
entry_box.place(x=10, y=100, width=80, height=30)

entry_box2 = tk.Entry(text = "")
entry_box2.place(x=10, y=180, width=80, height=30)

button = tk.Button(text='Convert', command=convert_height)
button.config(font='16')
button.place(x=10, y=220, width=100, height=35)

label2 = tk.Label(text = 'Converted height:')
label2.place(x=140, y=20, height=30)

textbox = tk.Message(text='0.00', width=200, font='21')
textbox.place(x=140, y=60)

window.mainloop()