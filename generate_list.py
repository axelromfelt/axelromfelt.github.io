import json

import os
EXTENSIONS = ['.jpg', '.png', '.jpeg', '.gif']
# get all files inside a specific folder

data = []
dir_path = r'./images'
for path in os.listdir(dir_path):
   # if path.is_file():
    for extension in EXTENSIONS:
        print(str(path), extension)
        if str(path).endswith(extension):
            data.append(path)  # .name)
            break

# Convert into JSON
# File name is mydata.json
with open("my_data.json", "w") as final:
    json.dump({'images': data}, final)
