from flask import Flask, render_template, request, jsonify
import numpy as np
from pandas import read_csv
import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.preprocessing import StandardScaler
from sklearn.linear_model import LinearRegression, Ridge, Lasso
from sklearn.neighbors import KNeighborsRegressor
from sklearn.neural_network import MLPRegressor
from sklearn.svm import LinearSVR, SVR
from sklearn.tree import DecisionTreeRegressor
from sklearn.ensemble import RandomForestRegressor, GradientBoostingRegressor
import warnings
from tensorflow.keras.models import Sequential
from tensorflow.keras.layers import Input, Dense,Dropout
from tensorflow.keras.layers import LSTM
from tensorflow.keras import layers
from sklearn.preprocessing import MinMaxScaler
from sklearn.metrics import mean_squared_error
import tensorflow as tf
import array as arr
import joblib
from tensorflow.keras.models import load_model

app = Flask(__name__)

# Load the dataset
data = read_csv('Vegetable_market.csv')
pre=read_csv('data.csv')
def preprocess_inp(data):
    data = data.copy()

    data['Vegetable'] = data['Vegetable'].replace({
        'cabage': 1,
        'radish': 2,
        'potato': 3,
        'tomato ': 4,
        'peas': 5,
        'pumkin': 6,
        'cucumber': 7,
        'pointed grourd ': 8,
        'Raddish': 9,
        'Bitter gourd': 10,
        'onion': 11,
        'ginger': 12,
        'garlic': 13,
        'califlower': 14,
        'brinjal': 15,
        'okra': 16,
        'chilly': 17,
    })

    data['Desaster_Happen_in_last_3month'] = data['Desaster_Happen_in_last_3month'].replace({'no' : 0,'yes' : 1})

    data['Month'] = data['Month'].replace({
        'jan' : 1,
        'feb':2 ,
        'mar':3,
        'apr':4,
        'may':5,
        'jun':6 ,
        'jul':7,
        'aug':8,
        'sep':9,
        'oct':10,
        'nov':11,
        'dec' : 12,
        ' ' : np.NaN
    })

    data['Month'] = data['Month'].fillna(data['Month'].mode()[0])

    data['Vegetable_condition'] = data['Vegetable_condition'].replace({'fresh' : 0,'avarage':1,'scrap':2})

    data['Season'] = data['Season'].replace({'winter' : 0,'summer':1,'spring':2,'autumn': 3,'monsoon':4})
    
    return data

input = preprocess_inp(data)
y = input['Price per kg'].values
X = input.drop(['Price per kg'],axis=1).values



X_train , X_test, y_train,y_test = train_test_split(X,y,test_size=0.2,shuffle=False)
X_train = X_train.reshape(X_train.shape[0], X_train.shape[1], 1)
X_test = X_test.reshape(X_test.shape[0], X_test.shape[1], 1)  # Reshape X_train

model = Sequential()
model.add(LSTM(50, input_shape=(X_train.shape[1], 1)))
model.add(Dense(units=1))
model.summary()
model.compile(optimizer='adam', loss='mean_squared_error')


model.fit(X_train,y_train,epochs=2500,batch_size=32,verbose=1)
trainpred = model.predict(X_train)
testpred = model.predict(X_test)
pre = pre.values.reshape(1, X_train.shape[1], 1)
pre=model.predict(pre)
print('predicted',pre)
trainpred 
testpred
trainrmse = np.sqrt(mean_squared_error(y_train,trainpred))
testrmse = np.sqrt(mean_squared_error(y_test,testpred))
print('Train RMSE: ', trainrmse)  
print('Test RMSE: ', testrmse)
model.save("model2/model.h5")
@app.route('/')
def index():
    return render_template('index.html')

@app.route('/predict', methods=['POST'])
def predict():
    data = request.get_json()
    
    df = pd.DataFrame(data, index=[0])
    df.to_csv('data.csv', index=False)
    dat = pd.read_csv('data.csv')
    
    # Preprocess and reshape the data to match LSTM input shape
    dat_input = dat.values.reshape(1, X_train.shape[1], 1)
    # Load the saved model
    loaded_model = tf.keras.models.load_model("model2/model.h5")

    
    # Predict using the loaded model
    predicted_price = loaded_model.predict(dat_input)
    
    return jsonify({'predicted_price': predicted_price.tolist()})


if __name__ == '__main__':
    app.run(debug=True)
