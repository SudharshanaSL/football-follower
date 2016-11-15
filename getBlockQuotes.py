import requests


def getBlockQuotes():
    idfiles = ['ChelseaFC.txt', 'Arsenal.txt', 'LiverpoolFC.txt', 'ManUtd.txt', 'ManCity.txt', 'premierleague.txt']
    for each_file in idfiles:
        fd = open(each_file,"r")
        writefile = open("bq_"+each_file,"w")
        tweetIDs = fd.readlines()
        tweetIDs = [ i.strip() for i in tweetIDs ]
        for each_id in tweetIDs:
            each_id = each_id.strip()
            params = {
                "id" : each_id
            }
            url = "https://api.twitter.com/1.1/statuses/oembed.json?"
            response = requests.get(url,params=params).json()
            blockquote = response["html"].strip()
            blockquote = blockquote.split("\n")[0]
            writefile.write( blockquote+"\n" )
        fd.close()
        print(each_file)
        writefile.close()


getBlockQuotes()