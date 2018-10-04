baseFile = open("log", "r")
logFile = baseFile.read().splitlines()
baseFile.close()

findArray = []

for log in logFile:
    index = log.find('[darkly] WARNING:')
    if index != -1:
        index = index + 18
        if log[index:] in findArray:
            continue
        else:
            findArray.append(log[index:])

for element in findArray:
    print(element)