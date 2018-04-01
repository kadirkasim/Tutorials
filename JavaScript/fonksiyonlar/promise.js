// const sozumuz = new Promise((resolve,reject)=>{
//     let islem = false;
//     if (islem)
//         resolve("Hersey umdugumuz gibi gitti..");
//     else
//         reject("Bir sorunla karsilastik ve islem tamamlanmadi.");
// });
//
//
// sozumuz.then((data)=>{
//     console.log(data);
// }).catch((err)=>{
//     console.log(err);
// });

function kareAl(data) {
    return new Promise((resolve, reject) => {

        if (data < 100)
            resolve(data * data);
        else
            reject('Aldın başını gidiyorsun !');
    });
}
kareAl(2).then((data)=>{
    console.log(data);
    return kareAl(data);
}).then((data)=>{
    console.log(data);
    return kareAl(data);
}).then((data)=>{
    console.log(data);
    return kareAl(data);
}).catch((err)=>{
    console.log(err);
});
