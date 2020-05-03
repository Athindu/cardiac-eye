import pandas as pd
from sklearn import cross_validation
from sklearn.naive_bayes import GaussianNB


dataset = "dataset.csv"
datasetHandler = open(dataset, "r")
dataFile = pd.read_csv(datasetHandler, sep=",")         #read the dataset
print ("Dataset size: ", dataFile.shape)
print (dataFile.isnull().any())                     #check for null occurances in the dataset

datasetHandler.close()
dataFile.head(5000)
train, test = cross_validation.train_test_split(dataFile, test_size=0.3, random_state=0)        #cross validation on dataset
naiveBayes = GaussianNB()

trainFeatures = train.ix[:, 0:14]
trainLabel = train.iloc[:, 14]

testFeatures = test.ix[:, 0:14]
testLabel = test.iloc[:, 14]

input = "input.csv"                         #input data from the user
inputHandler = open(input, "r")
inputFile = pd.read_csv(inputHandler, sep=",")
inputHandler.close()
inputFile.head(1)

train1,test1 = cross_validation.train_test_split(inputFile, test_size=0.2, random_state=0)
testFeaturesNW = test1.ix[:, 0:14]
testLabelNW = test1.iloc[:, 14]
naiveBayes.fit(trainFeatures, trainLabel)               #training the model

testedD = pd.concat([testFeaturesNW, testLabelNW], axis=1)
testPredict = naiveBayes.predict(testFeaturesNW)                #get the prediction

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

accuracy = naiveBayes.score(testFeatures,testLabel)             #calculate accuracy
print("Mean accuracy of the result: ", accuracy)

