import pandas as pd
from sklearn import cross_validation
from sklearn.naive_bayes import GaussianNB

m_file = "dataset.csv"
m_file_handler = open(m_file, "r")
m_data = pd.read_csv(m_file_handler, sep=",")
m_file_handler.close()
m_data.head(5000)
train, test = cross_validation.train_test_split(m_data,test_size=0.3, random_state=0)
naive_b = GaussianNB()

train_features = train.ix[:,0:14]
train_label = train.iloc[:,14]

test_features = test.ix[:,0:14]
test_label = test.iloc[:,14]

m_file1 = "input.csv"
m_file_handler1 = open(m_file1, "r")
m_data1 = pd.read_csv(m_file_handler1, sep=",")
m_file_handler1.close()
m_data1.head(1)

train1,test1 = cross_validation.train_test_split(m_data1,test_size=0.2, random_state=0)
test_features1 = test1.ix[:,0:14]
test_label1 = test1.iloc[:,14]
naive_b.fit(train_features, train_label)

test_data = pd.concat([test_features1, test_label1], axis=1)
m_predict = naive_b.predict(test_features1)
test_data["prediction"] = m_predict
result = m_predict[0]
test = str(result)
print ("Result : ", test)