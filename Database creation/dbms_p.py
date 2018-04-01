import random

fp=open("names.txt","r")
fp1=open("final_p.txt","a")
t=fp.readline();
c=0
offence=["murdrer","robbery","kidnapping","Manslaughter","Larceny","assault","Extortion","High treason"]
sex = ["M","F","O"]
while(c<=500):
        c+=1
        l=t.split(" ")
        name=l[0];
        j=str(random.randint(1,29))
        k=str(random.randint(1,29))
        if (len(j)==1):
                aday="0"+j
        else:
                aday=j
        if (len(k)==1):
                rday="0"+k
        else:
                rday=k
        f=str(random.randint(1,12))
        g=str(random.randint(1,12))
        if (len(f)==1):
                am="0"+f
        else:
                am=f
        if (len(g)==1):
                rm="0"+g
        else:
                rm=g
        ayear=random.randint(1990,2016)
        ryear=random.randint(ayear,ayear+25)
        
        cell = random.randint(1,16)
        
        g=c%(len(sex))
        r=c%(len(offence))
        fp1.write(str(c)+"#"+name+"#"+sex[g]+"#"+offence[r]+"#"+str(ayear)+"-"+am+"-"+aday+"#"+str(ryear)+"-"+rm+"-"+rday+"#"+str(cell)+"\n")
        t=fp.readline()
fp.close()
fp1.close()
