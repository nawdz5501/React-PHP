import axios from 'axios'
export const weatherAPICall= async (loc)=>{
    let apiKey=process.env.REACT_APP_APIKEY
   try {
     await axios.get(`https://api.openweathermap.org/data/2.5/weather?q=${loc}&appid=${apiKey}`)   
   }catch(err){
    throw err;
   }
}