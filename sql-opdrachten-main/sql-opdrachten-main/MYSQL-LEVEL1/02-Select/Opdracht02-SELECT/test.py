from email import message


message = 'ik kaas onterft je vader'
gesplitte_bericht = message.split()
if 'onterft' in gesplitte_bericht:
    print('onterft in bericht')
else:
    print('onterft niet in bericht')