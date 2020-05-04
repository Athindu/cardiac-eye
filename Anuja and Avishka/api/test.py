from flask import request
import flask
import csv
from subprocess import Popen
from processing import *
data = {}
app = flask.Flask(__name__)
app.config["DEBUG"] = True


@app.route('/patientdata', methods=['POST'])
def main():
    AB= request.form.get('ab')
    print(AB)
    AC= 1
    AD= request.form.get('ad')
    AE= request.form.get('ae')
    AF= request.form.get('af')
    AG= request.form.get('ag')
    AH= request.form.get('ah')
    AI= request.form.get('ai')
    AJ= request.form.get('aj')
    AK= request.form.get('ak')
    AL= request.form.get('al')
    AM= request.form.get('am')
    AN= request.form.get('an')
    AO= request.form.get('ao')

    print ("Data collected Done")
    c = csv.writer(open("input.csv", "wb"))
    c.writerow(["Age","Gender","Cholestrol - Total" ,"Triglycerides","Cholestrol - H.D.L","Cholestrol - L.D.L","Cholestrol - VLDL","CHOL/HDL","LDL/HDL","Blood Pressure","BMI","Continine Concentration","Insulin Resistance","Heart Rate",
])
    c.writerow([AB,AC,AD,AE,AF,AG,AH,AI,AJ,AK,AL,AM,AN,AO])
    Popen('python processing.py')

    return test
app.run()

