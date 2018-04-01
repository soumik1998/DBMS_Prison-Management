import random

fp=open("names.txt","r")
fp1=open("final_o.txt","a")
t=fp.readline();
c=0
sex = ["M","F","O"]
position = ["Gatekeeper", "Officer"]

prison=["Bag Bazar, Port Blair","Madras colony, Chennai","Bankipur, Patna","Freedom Park, Bangalore","Musheerabad, Hyderabad","f3 Apartment, Andaman Islands","PV Nagar, Ahmedabad, Gujarat","Ross Island Penal Colony, Port Blair"]
while(c<=50):
        c+=1
        l=t.split(" ")
        name=l[0];
        ph_no=str(random.randint(100000000,999999999))
        duty = random.randint(0,1)
        g=c%(len(sex))
        r=c%(len(position))
        p=c%(len(prison))
        fp1.write(str(c)+"#"+name+"#"+sex[g]+"#"+position[r]+"#"+ph_no+"#"+prison[p]+"#"+str(0)+"\n")
        t=fp.readline()
fp.close()
fp1.close()
