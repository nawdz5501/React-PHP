import React from 'react'
import {FaFacebookSquare,FaInstagram,FaGithub,FaLinkedin} from 'react-icons/fa'
const Footer = () => {
  return (

    <div className='bg-black w-full  text-white flex flex-col items-center' id='footer'>
        <div id='social-network' className='flex justify-center items-center min-h-80px'>
            <a href='https://www.facebook.com/Genawx' target='_blank' rel="noreferrer"><FaFacebookSquare className='mr-2 text-4xl text-blue-700 bg-white'/></a>
            <a href='https://www.facebook.com/Genawx' target='_blank' rel="noreferrer"><FaInstagram className='mr-2  text-4xl'/></a>
            <a href='https://www.facebook.com/Genawx' target='_blank' rel="noreferrer"><FaGithub className='mr-2  text-4xl'/></a>
            <a href='https://www.facebook.com/Genawx' target='_blank' rel="noreferrer"><FaLinkedin className='mr-2  text-4xl text-blue-600  bg-white'/></a>
        </div>
        <ul id='extend-links' className='flex space-x-5 mb-6 '>
          <li className='hover:underline cursor-pointer'>Service</li>
          <li className='hover:underline cursor-pointer'>Portfolio</li>
          <li className='hover:underline cursor-pointer'>Projects</li>
          <li className='hover:underline cursor-pointer'>Price and terms</li>
        </ul>
        <span>&copy; 2022 VHN </span>
    </div>
  )
}

export default Footer