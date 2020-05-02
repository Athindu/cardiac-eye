import pandas as pd
from sklearn import cross_validation
from sklearn.naive_bayes import GaussianNB

#from sklearn.metrics import accuracy_score

dataset = "dataset.csv"
datasetHandler = open(dataset, "r")
dataFile = pd.read_csv(datasetHandler, sep=",")
print ("Dataset size: ", dataFile.shape)
print (dataFile.isnull().any())

datasetHandler.close()
dataFile.head(5000)
train, test = cross_validation.train_test_split(dataFile, test_size=0.3, random_state=0)
naiveBayes = GaussianNB()

trainFeatures = train.ix[:, 0:14]
trainLabel = train.iloc[:, 14]

testFeatures = test.ix[:, 0:14]
testLabel = test.iloc[:, 14]

input = "input.csv"
inputHandler = open(input, "r")
inputFile = pd.read_csv(inputHandler, sep=",")
inputHandler.close()
inputFile.head(1)

train1,test1 = cross_validation.train_test_split(inputFile, test_size=0.2, random_state=0)
testFeaturesNW = test1.ix[:, 0:14]
testLabelNW = test1.iloc[:, 14]
naiveBayes.fit(trainFeatures, trainLabel)

testedD = pd.concat([testFeaturesNW, testLabelNW], axis=1)
testPredict = naiveBayes.predict(testFeaturesNW)

testedD["prediction"] = testPredict
result = testPredict[0]
print (result)
test = str(result)
print ("Result : ", test)
if test=="0":
    print ("Positive feedback")
elif test=="1":
    print ("Negative feedback")
else:
    print("Invalid result")

accuracy = naiveBayes.score(testFeatures,testLabel)
print("Mean accuracy of the result: ", accuracy)

#print ("Accuracy  : ", accuracy_score(testLabelNW,testPredict))