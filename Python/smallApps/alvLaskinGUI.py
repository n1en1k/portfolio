import tkinter as tk

def laske_verollinen24():
    veroton = entry_box.get()
    try:
        verollinen_hinta = 1.24 * float(veroton)
        veron_osuus = 0.24 * float(veroton)
    except ValueError:
        textbox['text'] = 'Virheellinen hinta'
        return
    textbox['text'] = 'veroton hinta: ' + str(veroton) + '\nveron osuus: ' + str(veron_osuus) + '\nverollinen hinta: ' + str(verollinen_hinta)

def laske_veroton24():
    verollinen = entry_box.get()
    try:
        veroton_hinta = float(verollinen) / 1.24
        veron_osuus = 24 * float(verollinen) / 124
    except ValueError:
        textbox['text'] = 'Virheellinen hinta'
        return
    textbox['text'] = 'verollinen hinta: ' + str(verollinen) + '\nveron osuus: ' + str(veron_osuus) + '\nveroton hinta: ' + str(veroton_hinta)

def laske_verollinen14():
    veroton = entry_box.get()
    try:
        verollinen_hinta = 1.14 * float(veroton)
        veron_osuus = 0.14 * float(veroton)
    except ValueError:
        textbox['text'] = 'Virheellinen hinta'
        return
    textbox['text'] = 'veroton hinta: ' + str(veroton) + '\nveron osuus: ' + str(veron_osuus) + '\nverollinen hinta: ' + str(verollinen_hinta)

def laske_veroton14():
    verollinen = entry_box.get()
    try:
        veroton_hinta = float(verollinen) / 1.14
        veron_osuus = 14 * float(verollinen) / 114
    except ValueError:
        textbox['text'] = 'Virheellinen hinta'
        return
    textbox['text'] = 'verollinen hinta: ' + str(verollinen) + '\nveron osuus: ' + str(veron_osuus) + '\nveroton hinta: ' + str(veroton_hinta)

def laske_verollinen10():
    veroton = entry_box.get()
    try:
        verollinen_hinta = 1.1 * float(veroton)
        veron_osuus = 0.1 * float(veroton)
    except ValueError:
        textbox['text'] = 'Virheellinen hinta'
        return
    textbox['text'] = 'veroton hinta: ' + str(veroton) + '\nveron osuus: ' + str(veron_osuus) + '\nverollinen hinta: ' + str(verollinen_hinta)

def laske_veroton10():
    verollinen = entry_box.get()
    try:
        veroton_hinta = float(verollinen) / 1.1
        veron_osuus = float(verollinen) / 11
    except ValueError:
        textbox['text'] = 'Virheellinen hinta'
        return
    textbox['text'] = 'verollinen hinta: ' + str(verollinen) + '\nveron osuus: ' + str(veron_osuus) + '\nveroton hinta: ' + str(veroton_hinta)


window = tk.Tk()
window.geometry('400x300')
window.title('ALV-laskin')

label = tk.Label(text = 'Syötä hinta:')
label.place(x=10, y=20, height=30)

entry_box = tk.Entry(text = "")
entry_box.place(x=10, y=60, width=80, height=30)

button = tk.Button(text='Laske verollinen 24 %', command=laske_verollinen24)
button.config(font='16')
button.place(x=10, y=140, width=150, height=35)

button2 = tk.Button(text='Laske veroton 24 %', command=laske_veroton24)
button2.config(font='16')
button2.place(x=170, y=140, width=150, height=35)

button3 = tk.Button(text='Laske verollinen 14 %', command=laske_verollinen14)
button3.config(font='16')
button3.place(x=10, y=180, width=150, height=35)

button4 = tk.Button(text='Laske veroton 14 %', command=laske_veroton14)
button4.config(font='16')
button4.place(x=170, y=180, width=150, height=35)

button5 = tk.Button(text='Laske verollinen 10 %', command=laske_verollinen10)
button5.config(font='16')
button5.place(x=10, y=220, width=150, height=35)

button6 = tk.Button(text='Laske veroton 10 %', command=laske_veroton10)
button6.config(font='16')
button6.place(x=170, y=220, width=150, height=35)

label2 = tk.Label(text = 'Laskettu vero:')
label2.place(x=140, y=20)

textbox = tk.Message(text='0.00', width=200, font='21')

textbox.place(x=140, y=40)

window.mainloop()