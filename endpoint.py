import flask
from flask import Flask
app = Flask(__name__)

@app.route('/web2/labproj/latest')
def hello_world():
    resp_count = 1
    ret_dict = dict()
    block_quote_files = ['bq_ChelseaFC.txt', 'bq_Arsenal.txt', 'bq_LiverpoolFC.txt', 'bq_ManUtd.txt', 'bq_ManCity.txt', 'bq_premierleague.txt']
    for each_file in block_quote_files:
        fd = open(each_file,"r")
        lines = fd.readlines()
        for line in lines[:20]:
            ret_dict[str(resp_count)] = line.strip()
            resp_count += 1
        fd.close()
    return flask.jsonify(ret_dict)

app.run()