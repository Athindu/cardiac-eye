import pandas as pd
from sklearn.naive_bayes import GaussianNB
from sklearn.model_selection import train_test_split
import csv
import json

m_file = "dataset.csv"

# Open the file for reading and read in data
m_file_handler = open(m_file, "r")
m_data = pd.read_csv(m_file_handler, sep=",")
m_file_handler.close()

m_data.head(5000)

# split the data into training and test data
train, test = train_test_split(m_data,test_size=0.3, random_state=0)

# initialise Gaussian Naive Bayes
naive_b = GaussianNB()

# Use all columns apart from the  column
train_features = train.ix[:,0:14]
# Use the dress_id column as the label
train_label = train.iloc[:,14]

# Repeat above for test data
test_features = test.ix[:,0:14]
test_label = test.iloc[:,14]

m_file1 = "input.csv"

# Open the file for reading and read in data
m_file_handler1 = open(m_file1, "r")
m_data1 = pd.read_csv(m_file_handler1, sep=",")
m_file_handler1.close()

m_data1.head(1)

train1,test1 = train_test_split(m_data1,test_size=0.2, random_state=0)
test_features1 = test1.ix[:,0:14]
test_label1 = test1.iloc[:,14]

# Train the naive bayes model
naive_b.fit(train_features, train_label)

# build a dataframe to show the expected vs predicted values
test_data = pd.concat([test_features1, test_label1], axis=1)
m_predict = naive_b.predict(test_features1)
test_data["prediction"] = m_predict
result = m_predict[0]
test = str(result)
print ("Patient : ", test)

# Use the score function and output the prediction accuracy
print ("Naive Bayes Accuracy:", naive_b.score(test_features,test_label))

