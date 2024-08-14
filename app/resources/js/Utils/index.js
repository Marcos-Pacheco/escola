export const inArray = (value,arr) => {
  return Object.values(arr).some(val => val == value);
}

export const truncate = (text, max = 10, trailing = '...') => {
  if (text && text.length > max) {
    return text.substring(0, max) + trailing
  }
  return text
}