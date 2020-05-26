content=open('form.html')
filereader=content.read()
names=[]
for i in range(len(filereader)-6):
    x=''
    if filereader[i]=='n'  and filereader[i+1]=='a' and filereader[i+2]=='m' and filereader[i+3]=='e' and filereader[i+4]=='=':
        i=i+5
        while(filereader[i]!=' ' and filereader[i]!='>'):
            x+=filereader[i]
            i+=1
        if x[1:len(x)-1] not in names and len(x)<20:
            names.append(x[1:len(x)-1])

print(len(names))
sql="create table apply ("
for i in range(len(names)):
    sql+=names[i]+" varchar(20),"
print(sql)
# create table apply (title varchar(20),keywords varchar(20),description varchar(20),viewport varchar(20),news_id varchar(20),user_id varchar(20),save varchar(20),exam_year varchar(20),news_title varchar(20),news_date varchar(20),venue_exam_month varchar(20),payment_amt varchar(20),special_accommoda varchar(20),guide varchar(20),test_level varchar(20),last_2_digit_year varchar(20),name varchar(20),gender varchar(20),dob varchar(20),passcode varchar(20),nativelang varchar(20),street varchar(20),city_state varchar(20),country varchar(20),postalcode varchar(20),telephone_no varchar(20),email varchar(20),institution_name varchar(20),learning_japanese varchar(20),reason_taking varchar(20),occupation varchar(20),media1 varchar(20),media2 varchar(20),media3 varchar(20),media4 varchar(20),media5 varchar(20),media6 varchar(20),media7 varchar(20),media8 varchar(20),media9 varchar(20),teacher1 varchar(20),teacher2 varchar(20),teacher3 varchar(20),teacher4 varchar(20),teacher5 varchar(20),friends1 varchar(20),friends2 varchar(20),friends3 varchar(20),friends4 varchar(20),friends5 varchar(20),family1 varchar(20),family2 varchar(20),family3 varchar(20),family4 varchar(20),family5 varchar(20),supervisor1 varchar(20),supervisor2 varchar(20),supervisor3 varchar(20),supervisor4 varchar(20),supervisor5 varchar(20),colleagues1 varchar(20),colleagues2 varchar(20),colleagues3 varchar(20),colleagues4 varchar(20),colleagues5 varchar(20),customers1 varchar(20),customers2 varchar(20),customers3 varchar(20),customers4 varchar(20),customers5 varchar(20),N1_level1 varchar(20),N2_level2 varchar(20),N3 varchar(20),N4_level4 varchar(20),N5_level5 varchar(20),N1_pass_fail varchar(20),N2_pass_fail varchar(20),N3_pass_fail varchar(20),N4_pass_fail varchar(20),N5_pass_fail varchar(20),photo varchar(20),prephoto varchar(20))

d=[]
variables=[]
for i in range(len(names)):
    variables.append("$"+names[i])
    d.append("$"+names[i]+"="+"$_REQUEST['"+names[i]+"'];")
for i in d:
    print(i)
query="INSERT INTO apply ("
for i in range(len(names)):
    if i<len(names)-1:
        query+=names[i]+','
    else:
        query+=names[i]+')'
        
query+=" VALUES ("
for i in range(len(variables)):
    if i<len(variables)-1:
        query+="'"+variables[i]+"'"+','
    else:
        query+="'"+variables[i]+"'"+')'
print(query)
for i in range(len(variables)):
    print(variables[i]+"=NULL;")