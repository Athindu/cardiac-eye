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