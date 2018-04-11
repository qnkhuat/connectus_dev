


with open('fb.txt') as f:
    fbs=f.readlines()

with open('name.txt') as f:
    names=f.readlines()


for idx,name in enumurate(names):
    content = []
    content.append(name)
    line=fbs.split('!')
    content.append(line)
    with open(idx+'.txt','w') as f:
